<?php
    
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
    
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\User;
use Auth;
    
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::whereNotNull('branch_id')->get();
        return view('admin.users.index',compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();

        return view('admin.users.create',compact('user'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|same:confirm_password',
            'confirm_password'  => 'required|same:password',
            'branch_id'         => 'required'
        ]);
        $request['type'] = 'Branch';
        $user = User::create($request->all());
    
        return redirect()->route('users.index')->with('success','User created successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show',compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
    
        return view('admin.users.edit',compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name'              => 'required',
            'email'             => 'required|email|unique:users,email,'.$user->id,
            'password'          => 'nullable|same:confirm_password',
            'confirm_password'  => 'nullable|same:password',
            'branch_id'         => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = $input['password'];
        }else{
            $input = Arr::except($input,array('password'));    
        }
        $user->update($input);
    
        return redirect()->route('users.index')->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')->with('success','User deleted successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileedit()
    {
        return view('admin.users.profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required',
            'email'             => 'required|email|unique:users,email,' . Auth::user()->id,
            'old_password'      => 'nullable|required_with:new_password',
            'new_password'      => 'nullable|min:8|max:12',
            'confirm_password'  => 'nullable|min:8|max:12|required_with:new_password|same:new_password'
        ]);

        $input = $request->all();

        if (!empty($input['new_password'])) {
            $input['password'] = $input['new_password'];
        }else {
            $input = Arr::except($input, array('password'));
        }
        Auth()->user()->update($input);
        
        return redirect()->back()->with('success', 'Profile updated successfully');
    }

    /**
     * Validate a resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkEmail(Request $request)
    {
        if ($request->id) {
            $user = User::where('id','!=',$request->id)->where('email', $request->email)->first(); 
        }else{
            $user = User::where('email', $request->email)->first();
        }

        if($user){ echo "false"; }else{ echo "true";}
    }

    /**
     * Validate a resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkPassword(Request $request)
    {
        $user = User::find($request->id);
        if(!Hash::check($request->old_password, $user->password)) { echo "false"; }else{ echo "true";}
    }
}