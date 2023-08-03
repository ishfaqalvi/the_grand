<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
/**
 * Class SliderController
 * @package App\Http\Controllers
 */
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexImage()
    {
        $sliders = Slider::userBased()->image()->get();

        return view('admin.slider.image.index', compact('sliders'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexVideo()
    {
        $sliders = Slider::userBased()->video()->get();

        return view('admin.slider.video.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createImage()
    {
        $slider = new Slider();
        return view('admin.slider.image.create', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createVideo()
    {
        $slider = new Slider();
        return view('admin.slider.video.create', compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Slider::$rules);

        $slider = Slider::create($request->all());
        $route = $slider->type == 'Image' ? 'sliders.image.index' : 'sliders.video.index';
        return redirect()->route($route)->with('success', 'Slider created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function showImage($id)
    {
        $slider = Slider::find($id);

        return view('admin.slider.image.show', compact('slider'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function showVideo($id)
    {
        $slider = Slider::find($id);

        return view('admin.slider.video.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function editImage($id)
    {
        $slider = Slider::find($id);

        return view('admin.slider.image.edit', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function editVideo($id)
    {
        $slider = Slider::find($id);

        return view('admin.slider.video.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        if($request->status != '' && $slider->type =='Image')
        {
            $checkSlide = Slider::where([
                ['type','Video'],
                ['branch_id',$slider->branch_id],
                ['status','Publish']
            ])->first();
            if ($checkSlide) {
                $checkSlide->update(['status' => 'UnPublish']);
            }
        }
        $slider->update($request->all());
        $route = $slider->type == 'Image' ? 'sliders.image.index' : 'sliders.video.index';
        return redirect()->route($route)->with('success', 'Slider updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $route = $slider->type == 'Image' ? 'sliders.image.index' : 'sliders.video.index';
        $slider->delete();
        return redirect()->route($route)->with('success', 'Slider deleted successfully');
    }
}
