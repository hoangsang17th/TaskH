<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\StaffProject;
use App\Model\tasks;
use App\Model\todo;
use App\Model\notes;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $cStaffProject = StaffProject::where('id', Auth::user()->id)->count();
        $ctasks = tasks::where('id', Auth::user()->id)->count();
        $ctodo = todo::where('id', Auth::user()->id)->count();
        $cnotes = notes::where('id', Auth::user()->id)->count();

        return view('home')
        ->with(compact('ctodo'))
        ->with(compact('cnotes'))
        ->with(compact('cStaffProject'))
        ->with(compact('ctasks'));
        
    }
}
