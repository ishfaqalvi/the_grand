<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Setting;
use Image;

/**
 * Class BranchController
 * @package App\Http\Controllers
 */
class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::paginate();

        return view('admin.branch.index', compact('branches'))
            ->with('i', (request()->input('page', 1) - 1) * $branches->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch = new Branch();
        return view('admin.branch.create', compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branch = Branch::create($request->all());
        $input = $request->settings;
        if($request->hasFile('settings')) {
            foreach ($request->file('settings') as $key => $file) {
                $filenamewithextension = $file->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                $filenametostore = 'upload/images/settings/'.time().'.webp';
                $img = Image::make($file)->encode('webp', 90)->resize(160, 38);   
                $img->save(public_path($filenametostore));
                $input['logo'] = $filenametostore;
            }
        }else{
            unset($input['logo']);
        }
        foreach($input as $key => $value){
            $branch->settings()->create(['key' => $key, 'value' => $value]);
        }

        return redirect()->route('branches.index')
            ->with('success', 'Branch created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch = Branch::find($id);

        return view('admin.branch.show', compact('branch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = Branch::find($id);

        return view('admin.branch.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Branch $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        $branch->update($request->all());
        $input = $request->settings;
        if($request->hasFile('settings')) {
            foreach ($request->file('settings') as $key => $file) {
                $filenamewithextension = $file->getClientOriginalName();
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
                $filenametostore = 'upload/images/settings/'.time().'.webp';
                $img = Image::make($file)->encode('webp', 90)->resize(160, 38);   
                $img->save(public_path($filenametostore));
                $input['logo'] = $filenametostore;
            }
        }else{
            unset($input['logo']);
        }
        foreach($input as $key => $value){
            $check_record = $branch->settings()->where('key', $key)->first();
            if ($check_record) {
                $check_record->update(['value' => $value]);
            }else{
                $branch->settings()->create(['key' => $key, 'value' => $value]);
            }
        }
        return redirect()->route('branches.index')
            ->with('success', 'Branch updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $branch = Branch::find($id)->delete();

        return redirect()->route('branches.index')
            ->with('success', 'Branch deleted successfully');
    }
}
