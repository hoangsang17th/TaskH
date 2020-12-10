<?php

namespace App\Http\Controllers\apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\todo;
use Auth;
class ToDoCompletionController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            # code...
            $id = Auth::user()->id;
            $todos = todo::where('id', $id)->get();
            $todo = $todos->sortByDesc('ToDo_ID');
            return view('apps.completiontodo', ['todo' => $todo]);
        }
    }
}
