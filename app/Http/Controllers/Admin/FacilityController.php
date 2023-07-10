<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Facility;
use App\Models\Branch;
use Illuminate\Http\Request;

/**
 * Class FacilityController
 * @package App\Http\Controllers
 */
class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::paginate();

        return view('admin.facility.index', compact('facilities'))
            ->with('i', (request()->input('page', 1) - 1) * $facilities->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facility = new Facility();
        $branches = Branch::pluck('name','id');
        return view('admin.facility.create', compact('facility','branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Facility::$rules);

        $facility = Facility::create($request->all());

        return redirect()->route('facilities.index')
            ->with('success', 'Facility created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facility = Facility::find($id);

        return view('admin.facility.show', compact('facility'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facility = Facility::find($id);
        $branches = Branch::pluck('name','id');
        return view('admin.facility.edit', compact('facility','branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Facility $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        request()->validate(Facility::$rules);

        $facility->update($request->all());

        return redirect()->route('facilities.index')
            ->with('success', 'Facility updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $facility = Facility::find($id)->delete();

        return redirect()->route('facilities.index')
            ->with('success', 'Facility deleted successfully');
    }
}
