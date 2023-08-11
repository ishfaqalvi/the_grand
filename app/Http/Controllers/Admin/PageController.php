<?php

namespace App\Http\Controllers\Admin;

use Auth;
use claviska\SimpleImage;
use Carbon\Carbon;
use App\Models\Page;
use App\Models\Branch;
use App\Models\Setting;
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
    public function index(Request $request)
    {
        $pages = Page::filter($request->all())->userBased()->get();
        $filters = getFilter(Page::userBased()->get(), ['branch_id','template','status']);
        $request->method() == 'POST' ? $userRequest = $request : $userRequest = null;

        return view('admin.page.index', compact('pages','filters','userRequest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = new Page();
        return view('admin.page.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = Page::create($request->all());

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.page.edit', compact('page'));
    }

    /**
     * Show the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $page = Page::find($id);
        $active_tab = $request->tab ? $request->tab : 'navigation';
        $settings = pageSettings($id);
        return view('admin.page.show', compact('page','active_tab','settings'));
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
        $page->update($request->all());
        return redirect()->route('pages.index')->with('success', 'Page updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $page = Page::find($id)->delete();

        return redirect()->route('pages.index')->with('success', 'Page deleted successfully');
    }

    /**
     * Validate a resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkSlug(Request $request)
    {
        if ($request->id) {
            $page = Page::where('id','!==',$request->id)->where([['slug', $request->slug],['branch_id',$request->branch_id]])->first();
        }else{
            $page = Page::where([['slug', $request->slug],['branch_id',$request->branch_id]])->first();
        }
        if($page){ echo "false"; }else{ echo "true";}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function settings(Request $request)
    {
        $input = $request->all();
        if ($request->values) {
            foreach($_POST['values'] as $key => $value){
                $input['key'] = $key;
                $input['value'] = $value;
                $check_record = Setting::where([
                    ['settable_type', $request->settable_type],
                    ['settable_id', $request->settable_id],
                    ['key', $key]
                ])->first();
                if ($check_record) {
                    $check_record->update(['value' => $value]);
                }else{
                    Setting::create($input);
                }
            }
        }
        foreach($request->file() as $key => $file){
            if ($image = $request->file($key)) 
            {
                // Get file's original extension
                $extension = $image->getClientOriginalExtension();
                // Create unique file name
                $name = 'upload/images/pages/settings/'.uniqid().".".$extension;
                $simpleImage = new SimpleImage();
                $simpleImage->fromFile($image)->resize($input['size'][$key]['x'] , $input['size'][$key]['y'])->toFile($name, 'image/jpeg');
            }
            $input['key'] = $key;
            $input['value'] = $name;
            $check_record = Setting::where([
                ['settable_type', $request->settable_type],
                ['settable_id', $request->settable_id],
                ['key', $key]
            ])->first();
            if ($check_record) {
                $check_record->update(['value'=> $name]);
            }else{
                Setting::create($input);
            }
        }
        $active_tab = $request->tab;
        $id = $request->settable_id;
        return redirect()->route('pages.show',[$id,'tab' => $active_tab])->with('success', 'Page Setting updated successfully.');
    }
}
