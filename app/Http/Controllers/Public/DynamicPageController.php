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
        $page = Page::where([['template','Home'],['branch_id', 1]])->first();
        if ($page) {
            return view('public.template.maindomain.index',compact('page'));
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
        $branch = Branch::where('url',$subdomain)->first();
        if ($branch) {
            $page = $branch->pages()->where('template','Home')->first();
            if ($page) {
                return view('public.template.subdomain.index',compact('page'));
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
    public function viewPage($slug1)
    {
        $checkLanguage = Language::where('code',$slug1)->first();
        /**
         * If home page with language
         */
        if ($checkLanguage && !isset($slug2)) {
            if ($checkLanguage->code == 'en') {
                return Redirect::to('/', 301);
            }
            $language = $checkLanguage;
            $languages= Language::where('id','!=', $language->id)->get();
            $slug     = '';
            $page     = Page::where([['template','Home'],['language_id',$language->id]])->first();
            if ($page) {
                return view('public.index',compact('slug','page','language','languages'));
            }return view('public.errors.404',compact('slug','page','language','languages'));
        }

        /**
         * If other than home page with language
         */
        elseif ($checkLanguage && isset($slug2)) {
            $language = $checkLanguage;
            if ($language->code == 'en') {
                return Redirect::to($slug2, 301);
            }
            $languages= Language::where('id','!=', $language->id)->get();
            $slug     = $slug2;
            $page     = Page::where([['slug',$slug2],['language_id',$language->id]])->first();
            if ($page) {
                return view('public.index',compact('slug','page','language','languages'));
            }return view('public.errors.404',compact('slug','page','language','languages'));
        }

        /**
         * If other than home page with out language
         */
        else{
            if (isset($slug1) && isset($slug2)) {
                return Redirect::to($slug2, 301);
            }
            $language = Language::find(1);
            $languages= Language::where('id','!=', $language->id)->get();
            $slug = $slug1;
            $page = Page::where([['slug',$slug1],['language_id',$language->id]])->first();
            if ($page) {
                if ($page->template == 'Home') {
                    return Redirect::to('/', 301);
                    return redirect()->route('home');
                }
                return view('public.index',compact('slug','page','language','languages'));
            }return view('public.errors.404',compact('slug','page','language','languages'));
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
