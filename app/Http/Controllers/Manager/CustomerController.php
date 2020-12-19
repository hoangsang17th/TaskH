<?php

namespace App\Http\Controllers\Manager;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = customer::all();
        return view('management.customer', compact('customer'));
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
        if(Auth::user()->Position_ID == 1){
            $customer = customer::find($id);
            return view('management.edit_customer', compact('customer'));
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
        if(Auth::user()->Position_ID == 1){
            $customer = customer::find($id);
            $customer->Customer_Name = $request->Customer_Name;
            $customer->Customer_Phone = $request->Customer_Phone;
            $customer->Customer_Address = $request->Customer_Address;
            $customer->Customer_Email = $request->Customer_Email;
            $customer->Customer_Facebook = $request->Customer_Facebook;
            $customer->Customer_Description = $request->Customer_Description;
            $customer->Customer_Birthday = $request->Customer_Birthday;
            $customer->save();
            return redirect()->route('customer.index');
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
        $customer = customer::find($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
