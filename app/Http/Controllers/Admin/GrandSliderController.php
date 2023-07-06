<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\GrandSlider;
use Illuminate\Http\Request;


/**
 * Class GrandSliderController
 * @package App\Http\Controllers
 */
class GrandSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grandSliders = GrandSlider::paginate();

        return view('admin.grand-slider.index', compact('grandSliders'))
            ->with('i', (request()->input('page', 1) - 1) * $grandSliders->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grandSlider = new GrandSlider();
        return view('admin.grand-slider.create', compact('grandSlider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GrandSlider::$rules); 
        $input = $request->all();

        if ($image = $request->file('image')) {
            $image_name = $request->file('image')->getClientOriginalName();
            $request->image->move('public/Image', $image_name);
            $input['image'] = $image_name;
        }
        $grandSlider = GrandSlider::create($input);

        return redirect()->route('grand-sliders.index')
            ->with('success', 'GrandSlider created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grandSlider = GrandSlider::find($id);

        return view('admin.grand-slider.show', compact('grandSlider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grandSlider = GrandSlider::find($id);

        return view('admin.grand-slider.edit', compact('grandSlider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GrandSlider $grandSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GrandSlider $grandSlider)
    {
        request()->validate(GrandSlider::$rules);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $image_name = $request->file('image')->getClientOriginalName();
            $request->image->move('public/Image', $image_name);
            $input['image'] = $image_name;
        }
        $grandSlider->update($input);
        return redirect()->route('grand-sliders.index')
            ->with('success', 'GrandSlider updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $grandSlider = GrandSlider::find($id)->delete();

        return redirect()->route('grand-sliders.index')
            ->with('success', 'GrandSlider deleted successfully');
    }
}
