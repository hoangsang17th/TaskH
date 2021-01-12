<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\project;
use App\Model\StaffProject;
use App\Model\UserModel;
use Auth;
use App\Model\customer;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = project::all();
        return view('management.projects',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = customer::all();
        return view('management.add_project', compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new project;
        $project->Customer_ID = $request->Customer_ID;
        $project->Status_ID = $request->Status_ID;
        $project->Project_Name = $request->Project_Name;
        $project->Start_Date = $request->Start_Date;
        $project->End_Date = $request->End_Date;
        $project->Budget = $request->Budget;
        $project->Des_Project = $request->Des_Project;
        $project->save();
        return redirect()->route('all_project.index');
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
        $Count = StaffProject::where('Project_ID', $id)->count();
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
        $project = project::find($id);
        $leader = UserModel::find($staffid);
        return view('management.project_detail')
        ->with(compact('project'))
        ->with(compact('StaffProject'))
        ->with(compact('Count'))
        ->with(compact('leader'));
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
            $customer = customer::all();
            $project = project::find($id);
            $customered = customer::find($project->Customer_ID);
            return view('management.edit_project')
            ->with(compact('project'))
            ->with(compact('customered'))
            ->with(compact('customer')); 
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
            $project = project::find($id);
            $project->Customer_ID = $request->Customer_ID;
            $project->Status_ID = $request->Status_ID;
            $project->Project_Name = $request->Project_Name;
            $project->Start_Date = $request->Start_Date;
            $project->End_Date = $request->End_Date;
            $project->Budget = $request->Budget;
            $project->Des_Project = $request->Des_Project;
            $project->save();
            return redirect()->route('all_project.index');
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
        $StaffProject = StaffProject::where('id', $id);
        $StaffProject->delete();
        return redirect()->route('all_project.index');
    }
}
