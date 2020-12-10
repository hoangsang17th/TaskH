<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\UserModel;
// use App\Model\user_info;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            # code...UserModel
            $id = Auth::user()->id;
            $user_info = UserModel::find($id);
            return view('user.profile', compact('user_info'));
        // return view('user.profile');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_info = UserModel::find($id);
        return view('user.profile', compact('user_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->id == $id){
            $user_info = UserModel::find($id);
            return view('user.profile_edit', compact('user_info'));
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
        $user_info->name = $request->name ;
        $user_info->Birthday = $request->Birthday ;
        $user_info->Profession = $request->Profession ;
        $user_info->Address = $request->Address ;
        $user_info->Phone = $request->Phone ;
        $user_info->Des = $request->Des ;
        $user_info->LinkedIn = $request->LinkedIn ;
        $user_info->Facebook = $request->Facebook ;
        $user_info->save();
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
