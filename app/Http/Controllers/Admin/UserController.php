<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->Position_ID == 2){
            $user_info = UserModel::all();
            $count = UserModel::all()->count();
            return view('admin.users', compact('user_info'), compact('count'));
        } 
        else{
            return redirect()->route('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->Position_ID == 2){
            return view('admin.add_user');
        } 
        else{
            return redirect()->route('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->Position_ID == 2){
            $user_info = new UserModel;
            $user_info->name = $request->name;
            $user_info->email = $request->email;
            $user_info->password = Hash::make($request->password);
            $user_info->Position_ID = $request->Position_ID;
            $user_info->Avatar = $request->Avatar;
            $user_info->save();
            return redirect()->route('accounts.index');
        } 
        else{
            return redirect()->route('home');
        }
        
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
        if(Auth::user()->Position_ID == 2){
            $user_info = UserModel::find($id);
            return view('admin.edit_user', compact('user_info'));
        } 
        else{
        return redirect()->route('home');
        }
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
        $user_info = UserModel::find($id);
        $user_info->name = $request->name;
        $user_info->Position_ID = $request->Position_ID;
        $user_info->Avatar = $request->Avatar;
        $user_info->save();
        return redirect()->route('accounts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user_info = UserModel::find($id);
        $user_info->delete();
        return redirect()->route('accounts.index');
    }
}
