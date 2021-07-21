<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\Gallery;

class AdminPagesController extends Controller
{
    //

    // dashboard
    public function dashboard(){
        
        $count_users = User::count();
        $count_feedbacks = Contact::count();
        $count_projects = Project::count();
        $count_services = Service::count();
        $count_images = Gallery::count();
        return view('back_end.pages_backend.admin_dashboard.dashboard',compact('count_users','count_feedbacks','count_projects','count_services','count_images'));
    }

    // view orders
    public function view_orders(){

         return view('back_end.pages_backend.orders_backend.view_orders');
        
    }

    // quotations
    public function quotes(){
        return view('back_end.pages_backend.quotes_backend.view_quotes');
    }

  

   

    

  


}
