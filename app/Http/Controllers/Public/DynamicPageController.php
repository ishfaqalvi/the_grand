<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use App\Models\Branch;
use App\Models\Page;


class DynamicPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function viewHomePage()
    {
        $page = Page::where([['template','Home'],['branch_id', 1],['status','Publish']])->first();
        $branchSetting = branchSettings(1);
        if ($page) {
            $pageSetting   = pageSettings($page->id);
            return view('public.template.mainIndex',compact('page','branchSetting','pageSetting'));
        }
        return view('public.errors.404', compact('branchSetting'));
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function viewSubdomainHomePage($subdomain)
    {
        $branch = Branch::where('name',$subdomain)->where('status','Publish')->first();
        if ($branch) {
            $page = $branch->pages()->where([['template','Home'],['status','Publish']])->first();
            if ($page) {
                $branchSetting = branchSettings($page->branch_id);
                $pageSetting   = pageSettings($page->id);
                return view('public.template.subIndex',compact('page','branchSetting','pageSetting'));
            }
            $branchSetting = branchSettings(1);
            return view('public.errors.404', compact('branchSetting'));
        }
        $branchSetting = branchSettings(1);
        return view('public.errors.404', compact('branchSetting'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewSubdomainOtherPage($subdomain, $slug)
    {
        $branch = Branch::where('name',$subdomain)->where('status','Publish')->first();
        if($branch){
            $page = Page::where([['slug',$slug],['status','Publish']])->first();
            if ($page) {
                if ($page->template != 'Home') {
                    $branchSetting = branchSettings($page->branch_id);
                    $pageSetting   = pageSettings($page->id);
                    return view('public.template.subIndex',compact('page','branchSetting','pageSetting'));
                }else{
                    // return redirect()->route('subdomain');   
                    $branchSetting = branchSettings(1);
            return view('public.errors.404', compact('branchSetting')); 
                }
            }else{
                // return redirect()->route('subdomain');
                $branchSetting = branchSettings(1);
            return view('public.errors.404', compact('branchSetting'));
            }
        }else{
            $branchSetting = branchSettings(1);
            return view('public.errors.404', compact('branchSetting'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function contactUsStore(Request $request)
    {
        $request->validate([
            'branch_id' => 'required',
            'name'      => 'required',
            'email'     => 'required',
            'number'    => 'required',
            'subject'   => 'required',
            'message'   => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        $contact = Contact::create($request->all());
        $settings = pageSettings($request->page_id);
        $contact->type = 'User';
        $contact->thankuMessage = $settings['contact_form_email_thanku_message'];
        $contact->processingTime = $settings['contact_form_email_processing_time_message'];
        Mail::to($contact->email)->send(new ContactFormMail($contact));
        $adminEmail = $settings['footer_email'];
        $contact->type = 'Admin';
        Mail::to($adminEmail)->send(new ContactFormMail($contact));
        return redirect()->back()->with(['contactMessage' => 'success']);
    }
}
