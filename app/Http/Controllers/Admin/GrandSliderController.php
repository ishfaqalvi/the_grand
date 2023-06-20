<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\GrandSlider;
use Illuminate\Http\Request;
use Image;

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
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $filenametostore = 'upload/images/gallery/'.time().'_'.str_replace(' ', '_','_').'.webp';
            if ($request->x && $request->y) {
                $img = Image::make($image)->encode('webp', 90)->resize($request->x, $request->y);   
            }else{
                $img = Image::make($image)->encode('webp', 90);;
            }
            $img->save(public_path($filenametostore));
            $input['image'] = $filenametostore;
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

        $grandSlider->update($request->all());

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
