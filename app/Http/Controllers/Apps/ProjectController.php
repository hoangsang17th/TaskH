<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\project;
use App\Model\StaffProject;
use App\Model\UserModel;
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
            // foreach ($StaffProject->$projects as $v){
            //     echo $v->Status_ID;
            // }
            // $project = project::where('Project_ID', $StaffProject->Project_ID)->get();
            // $project = project::paginate(10); Giống limit bên php á
            // Để qua trang 2 chỉ cần gõ ?page=2
            // Quá ngon
            
            // echo $Staff->projects->statusprojects->Status_ID;
            return view('apps.project',compact('StaffProject'));
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
        $StaffProject = StaffProject::where('Project_ID', $id)->get();
        $confirm = 0;
        $staffid = 1;
        foreach ($StaffProject as $Staff){
            if($Staff->id == Auth::user()->id){
                $confirm = 1;
            }
            if($Staff->Role_ID == 1){
                $staffid = $Staff->id;
            }
        }
        if($confirm == 1){
            $project = project::find($id);
            $leader = UserModel::find($staffid);
            return view('apps.project_detail')
            ->with(compact('project'))
            ->with(compact('leader'));
        }
        else return redirect()->route('home');
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
