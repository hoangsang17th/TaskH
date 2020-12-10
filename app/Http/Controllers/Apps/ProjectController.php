<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\project;
use App\Model\StaffProject;
use Auth;
class ProjectController extends Controller
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
            $StaffProject = StaffProject::where('id', $id)->get();
            // foreach ($StaffProject as $StaffProject){
            //     echo $StaffProject->project->Project_Name;
            // }
            // $project = project::where('Project_ID', $StaffProject->Project_ID)->get();
            // $project = project::paginate(10); Giống limit bên php á
            // Để qua trang 2 chỉ cần gõ ?page=2
            // Quá ngon
            return view('apps.project', ['project' => $StaffProject]);
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
        $StaffProject = StaffProject::where('id', $id)->get();
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
        //
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
        //
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
