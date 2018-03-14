<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Controllers\all;
use App\Http\Requests\UserEditRequest;
use App\Photo;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // to make all roles in an array we use pluck() then all()
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.create' , compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $input = $request->all();

        if($file = $request->file('photo_id')){


         $name = time() . $file->getClientOriginalName();
         $file->move('images', $name);

         $photo = Photo::create(['file'=>$name]);

         $input['photo_id'] = $photo->id;


        }

        $input['password'] = bcrypt($request->password);
        User::create($input);
        Session::flash('create_user', 'The User Has Been Created');
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {
        if(trim($request->password) == ''){

            $input = $request->except('password');

        } else{

            $input = $request->all();

            $input['password'] = bcrypt($request->password);
        }

        $user = User::findOrFail($id);
        if($file = $request->file('photo_id')){
            $name = time() .  $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }
        $user->update($input);
        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user = User::findOrFail($id);
       unlink(public_path() . $user->photo->file);
       $user->delete();

       Session::flash('deleted_user', 'The User Has Been Deleted');



       return redirect('/admin/users');
    }
}
