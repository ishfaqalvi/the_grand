<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Language;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Image;

/**
 * Class PageController
 * @package App\Http\Controllers
 */
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_home()
    {
        $pages = Page::where('template','Home')->userBased()->get();

        return view('admin.page.home.index', compact('pages'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_tool()
    {
        $pages = Page::where('template','Tool')->get();

        return view('admin.page.tool.index', compact('pages'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_blog()
    {
        $pages = Page::where('template','Blog')->get();

        return view('admin.page.blog.index', compact('pages'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_problem()
    {
        $pages = Page::where('template','Problem')->get();

        return view('admin.page.problem.index', compact('pages'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_category()
    {
        $pages = Page::where('template','Category')->get();

        return view('admin.page.category.index', compact('pages'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_career()
    {
        $pages = Page::where('template','Career')->get();

        return view('admin.page.career.index', compact('pages'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_contact_us()
    {
        $pages = Page::where('template','Contact_us')->get();

        return view('admin.page.contact_us.index', compact('pages'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_simple()
    {
        $pages = Page::where('template','Simple')->get();

        return view('admin.page.simple.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_home()
    {
        $page      = new Page();
        return view('admin.page.home.create', compact('page' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_tool()
    {
        $page = new Page();
        
        return view('admin.page.tool.create', compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_blog()
    {
        $page = new Page();
        $relatedBlogs = Page::where('template','Blog')->pluck('title','id');
        
        return view('admin.page.blog.create', compact('page','relatedBlogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_problem()
    {
        $page = new Page();
        $relatedProblems = Page::where('template','Problem')->pluck('title','id');
        return view('admin.page.problem.create', compact('page','relatedProblems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_category()
    {
        $page = new Page();
        
        return view('admin.page.category.create', compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_career()
    {
        $page = new Page();
        
        return view('admin.page.career.create', compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_contact_us()
    {
        $page = new Page();
        
        return view('admin.page.contact_us.create', compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_simple()
    {
        $page = new Page();
        
        return view('admin.page.simple.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($image = $request->file('image')) {
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $filenametostore = 'upload/images/pages/'.$input['slug'].'.webp';
            $img = Image::make($image)->encode('webp', 90)->resize($request->x , $request->y);
            $img->save(public_path($filenametostore));
            $input['image'] = $filenametostore;
        }else{
            unset($input['image']);
        }
        $page = Page::create($input);
        if($request->relatedPages){
            foreach ($request->relatedPages as $id) {
                $page->relatedPages()->create(['parent_id' => $id]);
            }
        }
        
        return redirect()->route('pages.'.strtolower($page->template).'.index')
            ->with('success', 'Page created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_home($id)
    {
        $page      = Page::find($id);
        $languages = Language::pluck('name','id');
        return view('admin.page.home.edit', compact('page','languages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_tool($id)
    {
        $page = Page::find($id);

        return view('admin.page.tool.edit', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_blog($id)
    {
        $page = Page::find($id);
        $relatedBlogs = Page::where('template','Blog')->where('id' ,'!=', $id)->pluck('title','id');
        return view('admin.page.blog.edit', compact('page','relatedBlogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_problem($id)
    {
        $page = Page::find($id);
        $relatedProblems = Page::where('template','Problem')->where('id' ,'!=', $id)->pluck('title','id');
        return view('admin.page.problem.edit', compact('page','relatedProblems'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_category($id)
    {
        $page = Page::find($id);

        return view('admin.page.category.edit', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_career($id)
    {
        $page = Page::find($id);

        return view('admin.page.career.edit', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_contact_us($id)
    {
        $page = Page::find($id);

        return view('admin.page.contact_us.edit', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_simple($id)
    {
        $page = Page::find($id);

        return view('admin.page.simple.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $input = $request->all();
        if ($image = $request->file('image')) {
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $filenametostore = 'upload/images/pages/'.$input['slug'].'.webp';
            $img = Image::make($image)->encode('webp', 90)->resize($request->x , $request->y);
            $img->save(public_path($filenametostore));
            $input['image'] = $filenametostore;
        }else{
            unset($input['image']);
        }
        $page->update($input);
        foreach ($page->relatedPages as $relatedpage) {
            $relatedpage->delete();
        }
        
        if($request->relatedPages){
            foreach ($request->relatedPages as $id) {
                $page->relatedPages()->create(['parent_id' => $id]);
            }
        }
        return redirect()->route('pages.'.strtolower($page->template).'.index')
            ->with('success', 'Page updated successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function publish(Request $request, Page $page)
    {
        $input                 = $request->all();
        $input['status']       = 'Publish';
        $input['published_at'] = Carbon::now();
        $input['published_by'] = Auth::user()->id ;
        $page->update($input);

        return redirect()->route('pages.'.strtolower($page->template).'.index')
            ->with('success', 'Page published successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function unpublish(Request $request, Page $page)
    {
        $input                 = $request->all();
        $input['status']       = 'UnPublish';
        $input['published_at'] = null;
        $input['published_by'] = null;
        $page->update($input);

        return redirect()->route('pages.'.strtolower($page->template).'.index')
            ->with('success', 'Page un published successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $url = $page->template;
        $page->delete();

        return redirect()->route('pages.'.strtolower($url).'.index')
            ->with('success', 'Page deleted successfully');
    }

    /**
     * Validate a resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkSlug(Request $request)
    {
        if ($request->id) {
            $page = Page::where('id','!==',$request->id)->where([['slug', $request->slug],['language_id',$request->language_id]])->first(); 
        }else{
            $page = Page::where([['slug', $request->slug],['language_id',$request->language_id]])->first();
        }
        if($page){ echo "false"; }else{ echo "true";}
    }
}
