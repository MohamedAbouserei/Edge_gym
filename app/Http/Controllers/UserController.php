<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Storage;
use App\User;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Filesystem\Filesystem;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceo');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $user = User::latest()->paginate($perPage);
        } else {
            $user = User::latest()->paginate($perPage);
        }

        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email'=>'required|email|unique:users,email',
            'name'=>'required|string|max:55|min:4',
            'landline'=>'string|max:55|min:4',
            'DOB'=>'required|date',
            'landline'=>'required|max:25|string|min:1',
            'phonenumber'=>'required|max:25|string|min:1',
            'salary'=>'required|max:1000000|Numeric|min:0',
            'workhours'=>'required|max:12|Integer|min:1',
            'type'=>'required|boolean',
            'pic'=>'required|file|image|max:20000',
            'password'=>'required|string|min:2|max:20',


        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/user')->with('errors', $errors);
        }

        $requestData = $request->all();

        if ($this->storeimage($request->file('pic'), $requestData['email'])) {
            $requestData['pic']=$request->email.'_'.$request->file('pic')->getClientOriginalName();
            $requestData['password']=Hash::make($request->password);
            User::create($requestData);
        }
        return redirect('admin/user')->with('flash_message', 'User added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'email'=>'required|email|unique:users,email',
            'name'=>'required|string|max:55|min:4',
            'landline'=>'string|max:55|min:4',
            'DOB'=>'required|date',
            'landline'=>'required|max:25|string|min:1',
            'phonenumber'=>'required|max:25|string|min:1',
            'salary'=>'required|max:1000000|Numeric|min:0',
            'workhours'=>'required|max:12|Integer|min:1',
            'type'=>'required|boolean',
            'pic'=>'required|file|image|max:20000',
            'password'=>'required|string|min:2|max:20',


        ]);
        if ($validate->fails()) {
            $errors = $validate->errors();
            return redirect('admin/user')->with('errors', $errors);
        }

        $requestData = $request->all();

        $user = User::findOrFail($id);
        $user->update($requestData);

        return redirect('admin/user')->with('flash_message', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $suser=User::findorfail($id);
        $this->destroyimage($suser->email, $suser->pic);
        User::destroy($id);

        return redirect('admin/user')->with('flash_message', 'User deleted!');
    }
    /**
     * add the specified resource to storage.
     *
     * @param  int  $image,$id
     *
     * @return state
     */
    public function storeimage($image, $id)
    {
        return Storage::disk('public')->putFileAs(
            'user_pic/'.$id,
            $image,
            $id.'_'.$image->getClientOriginalName()
        );
    }
    /**
     * remove the specified resource from storage.
     *
     * @param  int  $id,$image
     *
     * @return state
     */
    public function destroyimage($id, $image)
    {
        unlink('storage\user_pic\\'.$id.'\\'.$image);
        return rmdir('storage\user_pic\\'.$id);
    }
}
