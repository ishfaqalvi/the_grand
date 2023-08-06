<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Image;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->tab ? $active_tab =$request->tab : $active_tab ='navigation';
        $settings = branchSettings();
        return view('admin.settings.index', compact('active_tab','settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
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
                $name = 'upload/images/settings/'.uniqid().".".$extension;
                $img = Image::make($image)->resize($input['size'][$key]['x'] , $input['size'][$key]['y'])->save(public_path($name));
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
        return redirect()->route('settings.index',['tab' => $active_tab])->with('success', 'Setting updated successfully.');
    }
}