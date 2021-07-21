<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\MultipleImageUpload;
use App\Models\User;

class PagesController extends Controller
{
    // about us page
    public function about(){
        return view('front_end.pages_frontend.about');
    }

    public function team(){
        return view('front_end.pages_frontend.team');
    }

    //projects
    public function project(){

        $all_projects = Project::with('project_category')->get();
        // $projects_multiple = MultipleImageUpload::all();
        return view('front_end.pages_frontend.project',compact('all_projects'));

      
    }

    public function our_services(){
        // fetch services from db
        $all_services = Service::all();
        return view('front_end.pages_frontend.our_services',compact('all_services'));
    }

    public function pictorial(){
        $pictorials = Gallery::all();
        return view('front_end.pages_frontend.pictorial',compact('pictorials'));
    }

    // public function contact(){
    //     return view('front_end.pages_frontend.contact');
    // }

    public function pricing(){
        return view('front_end.pages_frontend.pricing');
    }


    // backend pages
    public function users(){

        $users = User::all();
        return view('back_end.pages_backend.users_backend.index',compact('users'));   




    }

}
