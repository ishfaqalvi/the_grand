<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Image;

/**
 * Class GalleryController
 * @package App\Http\Controllers
 */
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_image(Request $request)
    {
        $images = Gallery::filter($request->all())->image()->userBased()->orderBy('order', 'asc')->get();
        $filters = getFilter(Gallery::image()->userBased()->get(), ['branch_id','category_id']);
        $request->method() == 'POST' ? $userRequest = $request : $userRequest = null;

        return view('admin.gallery.image.index', compact('images','filters','userRequest'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_video(Request $request)
    {
        $videos = Gallery::filter($request->all())->video()->userBased()->orderBy('order', 'asc')->get();
        $filters = getFilter(Gallery::video()->userBased()->get(), ['branch_id','category_id']);
        $request->method() == 'POST' ? $userRequest = $request : $userRequest = null;

        return view('admin.gallery.video.index', compact('videos','filters','userRequest'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = Gallery::create($request->all());
        $message = $gallery->type.' uploaded successfully.';

        return redirect()->back()->with('success', $message);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $gallery->update($request->all());
        return redirect()->back()->with('success', 'Media updated successfully.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $message = $gallery->type.' deleted successfully.';
        $gallery->delete();

        return redirect()->back()->with('success', $message);
    }
}
