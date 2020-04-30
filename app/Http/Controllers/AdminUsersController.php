<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Photo;
use Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AdminUsersRequest;
use App\Http\Requests\AdminUsersUpdateRequest;


class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $users =User::Paginate(3);
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles =Role::pluck('name','id')->all();
        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUsersRequest $request)
    {
        $input =$request->all();

        $admins =User::where('role_id',1)->count();

      

        if($file =$request->file('photo_id')){
            $name =time() .$file->getClientOriginalName();


            $file->move('images',$name);

            $photo =Photo::create([
                'file'=>$name,
            ]);

           $input['photo_id']=$photo->id;
         }



         $input['password'] =Hash::make($request->password);
         User::create([
             'name'=>$input['name'],
             'email'=>$input['email'],
             'gender'=>$input['gender'],
             'password'=>$input['password'],
             'role_id'=>$input['role_id'],
             'isActive'=>$input['isActive'],
             'photo_id'=>$input['photo_id']
         ]);
 //
 //
        Session::flash('user_created','User has been created successfully');
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
        $user =User::findOrFail($id);
        $roles =Role::pluck('name','id')->all();
        return view('admin.users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user =User::find($id);
        $input =$request->all();

        if($file =$request->file('photo_id')){
            $name =time().$file->getClientOriginalName();
            $file->move('images',$name);
            $photo =Photo::create(['file'=>$name]);

            $input['photo_id']= $photo->id;
        }

        $user->update($input);

        Session::flash('user_updated','User has been updated successfully!');

        return redirect('admin/users');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =User::findOrFail($id)->delete();

        Session::flash('user_deleted','User has been deteled successfully!');

        return redirect('admin.users');
    }

    public function dashboard(){
        $users =User::count();
        return view('admin.index',compact('users'));
        // return $users;
    }

    public function updatePhoto(Request $request,$id){
        $user =User::find($id);
        $input =$request->all();

        return $input;



    }


}
