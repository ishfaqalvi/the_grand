<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Image;
use Carbon\Carbon;
use App\Models\Page;
use App\Models\Branch;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function index_image_gallery()
    {
        $pages = Page::where('template','ImageGallery')->get();

        return view('admin.page.imagegallery.index', compact('pages'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_video_gallery()
    {
        $pages = Page::where('template','VideoGallery')->get();

        return view('admin.page.videogallery.index', compact('pages'));
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
        $pages = Page::where('template','ContactUs')->get();

        return view('admin.page.contactus.index', compact('pages'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_faq()
    {
        $pages = Page::where('template','FAQ')->get();

        return view('admin.page.faq.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_home()
    {
        $page      = new Page();
        $branches  = Branch::pluck('name','id');
        return view('admin.page.home.create', compact('page', 'branches'));
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
    public function create_image_gallery()
    {
        $page = new Page();
        $branches  = Branch::pluck('name','id');
        return view('admin.page.imagegallery.create', compact('page', 'branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_video_gallery()
    {
        $page = new Page();
        $branches  = Branch::pluck('name','id');
        return view('admin.page.videogallery.create', compact('page', 'branches'));
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
        $branches  = Branch::pluck('name','id');

        return view('admin.page.contactus.create', compact('page' , 'branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_faq()
    {
        $page = new Page();
        $branches  = Branch::pluck('name','id');

        return view('admin.page.faq.create', compact('page' , 'branches'));
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
        $branches  = Branch::pluck('name','id');
        // $languages = Language::pluck('name','id');
        // return view('admin.page.home.edit', compact('page','languages'));
        return view('admin.page.home.edit', compact('page', 'branches'));
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
    public function edit_image_gallery($id)
    {
        $page = Page::find($id);
        $branches  = Branch::pluck('name','id');
        return view('admin.page.imagegallery.edit', compact('page','branches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_video_gallery($id)
    {
        $page = Page::find($id);
        $branches  = Branch::pluck('name','id');
        return view('admin.page.videogallery.edit', compact('page','branches'));
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
        $branches  = Branch::pluck('name','id');

        return view('admin.page.contactus.edit', compact('page' , 'branches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit_faq($id)
    {
        $page = Page::find($id);
        $branches  = Branch::pluck('name','id');

        return view('admin.page.faq.edit', compact('page' , 'branches'));
    }

    public function show_contact_us($id)
    {
        $page = Page::with('branch')->find($id);

        return view('admin.page.contactus.show', compact('page'));
    }

    public function show_faq($id)
    {
        $page = Page::with('branch')->find($id);

        return view('admin.page.faq.show', compact('page'));
    }

    public function show_image_gallery($id)
    {
        $page = Page::with('branch')->find($id);

        return view('admin.page.imagegallery.show', compact('page'));
    }

    public function show_video_gallery($id)
    {
        $page = Page::with('branch')->find($id);

        return view('admin.page.videogallery.show', compact('page'));
    }

    public function show_home($id)
    {
        $page = Page::with('branch')->find($id);

        return view('admin.page.home.show', compact('page'));
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
