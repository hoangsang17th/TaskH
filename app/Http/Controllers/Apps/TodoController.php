<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\todo;
use Auth;
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            # code...
            $id = Auth::user()->id;
            $todos = todo::where('id', $id)->get();
            $todo = $todos->sortByDesc('ToDo_ID');
            return view('apps.todo', ['todo' => $todo]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Trang có cái form nhập dữ liệu
        // return view('todo.create');
        // Trong form này action gửi về trang todo.store để lưu vào database
        // action= "{{ route('todo.store') }}"
        // return "456";
        // todo/create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo = new todo;
        $todo->Mission_ToDo = $request->Mission_ToDo;
        $todo->id = Auth::user()->id;
        $todo->save();
        return redirect()->route('todo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $todo = todo::where('id', Auth::user()->id)
        //                 ->where('ToDo_ID', '=', $id)
        //                 ->get();
        // return view('apps.edittodo', compact('todo'));
        // todo/$id
        // return View('apps.edittodo')->with('todo', $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return "Trang này edit";
        // todo/$id/edit phương thức get
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ToDo_ID)
    {
        // return "hello";
        // return $id;
        $todoupdate = todo::find($ToDo_ID);
        // where('ToDo_ID', $ToDo_ID)
        //                     ->first();
        // return $request->Completion_Date;
        $todoupdate->Completion_Date = $request->Completion_Date;
        // return $todo->ToDo_ID;
        $todoupdate->save();
        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = todo::where('ToDo_ID', $id);
        $todo->delete();
        return redirect()->route('todo.index');
        // return $todo->Mission_ToDo;
    }
}
