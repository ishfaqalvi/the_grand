<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $page          = Page::where([['template','Home'],['branch_id', 1]])->first();
        $branchSetting = branchSettings($page->branch_id);
        $pageSetting   = pageSettings($page->id);
        if ($page) {
            return view('public.template.mainIndex',compact('page','branchSetting','pageSetting'));
        }
        return view('public.errors.404');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function viewSubdomainHomePage($subdomain)
    {
        $branch = Branch::where('name',$subdomain)->first();
        if ($branch) {
            $page = $branch->pages()->where('template','Home')->first();
            if ($page) {
                $branchSetting = branchSettings($page->branch_id);
                $pageSetting   = pageSettings($page->id);
                return view('public.template.subIndex',compact('page','branchSetting','pageSetting'));
            }
            return view('public.errors.404');
        }
        return view('public.errors.404');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewSubdomainOtherPage($subdomain, $slug)
    {
        $page = Page::where('slug',$slug)->first();
        if ($page) {
            if ($page->template != 'Home') {
                $branchSetting = branchSettings($page->branch_id);
                $pageSetting   = pageSettings($page->id);
                return view('public.template.subIndex',compact('page','branchSetting','pageSetting'));
            }else{
                return redirect()->route('subdomain');    
            }
        }else{
            return redirect()->route('subdomain');
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
            'message'   => 'required'
        ]);
        Contact::create($request->all());
        return redirect()->back()->with(['contactMessage' => 'success']);
    }
}
