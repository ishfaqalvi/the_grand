<?php

namespace App\Http\Controllers\Public;
use App\Models\Page;

use App\Models\Branch;
use App\Models\Comment;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

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
    public function jobApplicationStore(Request $request)
    {
        $request->validate([
            'career_id' => 'required',
            'name'      => 'required',
            'email'     => 'required',
            'attachment'=> "required|mimetypes:application/pdf|max:10000"
        ]);
        JobApplication::create($request->all());
        $parameters = ['jobApplicationMessage' => settings('job_application_message'),'application_id' => $request->career_id];
        return redirect()->back()->with($parameters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function feedbackStore(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'message' => "required"
        ]);
        Feedback::create($request->all());
        $parameters = ['feedbackMessage' => settings('feadback_message')];
        return redirect()->back()->with($parameters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function commentStore(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'message' => "required"
        ]);
        Comment::create($request->all());
        $parameters = ['commentMessage' => settings('comment_message')];
        return redirect()->back()->with($parameters);
    }
}
