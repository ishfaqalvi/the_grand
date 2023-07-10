<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Testimonial;
use App\Models\Branch;
use Illuminate\Http\Request;

/**
 * Class TestimonialController
 * @package App\Http\Controllers
 */
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate();

        return view('admin.testimonial.index', compact('testimonials'))
            ->with('i', (request()->input('page', 1) - 1) * $testimonials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testimonial = new Testimonial();
        $branches = Branch::pluck('name','id');
        return view('admin.testimonial.create', compact('testimonial','branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Testimonial::$rules);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $image_name = $request->file('image')->getClientOriginalName();
            $request->image->move('upload/images/testimonials/', $image_name);
            $input['image'] = $image_name;
        }
        $testimonial = Testimonial::create($input);

        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimonial = Testimonial::find($id);

        return view('admin.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        $branches = Branch::pluck('name','id');
        return view('admin.testimonial.edit', compact('testimonial','branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
       
        $input = $request->all();

        if ($image = $request->file('image')) {
            $image_name = $request->file('image')->getClientOriginalName();
            $request->image->move('upload/images/testimonials/', $image_name);
            $input['image'] = $image_name;
        }
        $testimonial->update($input);

        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id)->delete();

        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial deleted successfully');
    }
}
