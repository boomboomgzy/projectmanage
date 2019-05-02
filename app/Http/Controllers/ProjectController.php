<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Project;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::orderBy('id','desc')->get();
        return view('projects.index', compact('projects'));
    }
    public function show($id){
        
    }
    public function create(){
        return view('projects.create');
    }
    public function store(Request $request){
        /* $this->validate($request, [
            'name' => 'required|max:50',
        ]); */
        
        $project = [
            'name'=>request('name'),
            'teacher'=>request('teacher'),
            'addition'=>request('addition')];
        Project::create($project);
        return redirect()->route('projects.index');
        
    }
    
    public function edit($id){
        $projects = Project::orderBy('id','desc')->get();
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project','projects'));
    }
    public function destroy($id){
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('projects.index');
        
    }
    public function update(Request $request,$id){
        $project = Project::findOrFail($id);
        $project->update([
            'name' => $request->name,
            'teacher' => $request->teacher,
            'addition' => $request->addition,
        ]);
        return redirect()->route('projects.index');
    }
    
}
