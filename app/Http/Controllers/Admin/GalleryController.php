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
    public function index()
    {
        $images = Gallery::userBasedImage()->get();
        $videos = Gallery::userBasedVideo()->get();
        $galleries = [$images, $videos];

        return view('admin.gallery.index', compact('galleries'));
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

        return redirect()->route('galleries.index')->with('success', $message);
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

        return redirect()->route('galleries.index')->with('success', $message);
    }
}
