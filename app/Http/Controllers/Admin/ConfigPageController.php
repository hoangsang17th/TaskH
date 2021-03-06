<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\configpage;
class ConfigPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->Position_ID == 2){
            $config_1 = configpage::find(1);
            $config_2 = configpage::find(2);
            $config_3 = configpage::find(3);
            $config_4 = configpage::find(4);
            return view('admin.config-page')
            ->with(compact('config_1'))
            ->with(compact('config_2'))
            ->with(compact('config_3'))
            ->with(compact('config_4'));
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
        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect()->route('home');
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
        if(Auth::user()->Position_ID == 2){
            $config_1 = configpage::find(1);
            $config_2 = configpage::find(2);
            $config_3 = configpage::find(3);
            $config_4 = configpage::find(4);
            $config_1->Content = $request->config_1;
            $config_2->Content = $request->config_2;
            $config_3->Content = $request->config_3;
            $config_4->Content = $request->config_4;
            $config_1->save();
            $config_2->save();
            $config_3->save();
            $config_4->save();
            return redirect()->route('config-page.index');
        } 
        else{
        return redirect()->route('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('home');
    }
}
