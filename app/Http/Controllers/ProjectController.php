<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;


use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('show');
        
        //Multiple exclude
        // $this->middleware('auth')->except(['index','other']);
    }


    
    public function index()
    {
      
        $projects = Project::with('project_category')->get();
        return view('back_end.pages_backend.projects_backend.index',compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project_categories = ProjectCategory::all();
        return view('back_end.pages_backend.projects_backend.create',compact('project_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->project_category_id       = $request->project_category_id;
        $project->title                     = $request->title;
        $project->description               = $request->description;

      
        //image 1 upload
        $project->project_image = $request->file('project_image')->move('uploads/projects');


        //image 2 upload
        $project->project_image_two = $request->file('project_image_two')->move('uploads/projects');
        //image 3 upload
        $project->project_image_three = $request->file('project_image_three')->move('uploads/projects');

        // save data to the database
        $project->save();

        // redirect
        return redirect('/projects');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        // backend show project
        // return view('back_end.pages_backend.projects_backend.show',compact('project'));

        // frontend show project
        return view('front_end.pages_frontend.single_project',compact('project'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $project_categories = ProjectCategory::all();

        return view('back_end.pages_backend.projects_backend.edit',compact('project','project_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project_category_id = $request->project_category_id;
        $title               = $request->title;
        $description         = $request->description;
        $mission             = $request->mission;
        
         //pick id fields for updating
         $project = Project::find($id);


       // update image 1
        if($request->hasFile('project_image')){
            
            $project->project_image = $request->file('project_image')->move('uploads/projects');
        }   
        //end of update image 1


        // update image 2
        if($request->hasFile('project_image_two')){
                    
            $project->project_image_two = $request->file('project_image_two')->move('uploads/projects');
        }   
        //end of update image 2

        // update image 2
        if($request->hasFile('project_image_three')){
                            
            $project->project_image_three = $request->file('project_image_three')->move('uploads/projects');
        }   
        //end of update image 2

        // db fields
        $project->project_category_id          = $project_category_id;
        $project->title                         = $title;
        $project->description                   = $description;
        
      

        //update db 
        $project->save();

        return redirect('/projects');   
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        // redirec
        return redirect('/projects');
    }
}
