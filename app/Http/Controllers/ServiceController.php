<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('show');
        
    }


    public function index()
    {
        $services = Service::all();
        return view('back_end.pages_backend.services_backend.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.pages_backend.services_backend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // store about content to database
        $service = new Service();
        $service->service_name         = $request->service_name;
        $service->service_description  = $request->service_description;

        //image upload
        $service->service_image = $request->file('service_image')->move('uploads/services');

        $service->save();
        // redirect
        return redirect('/services');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        // backend_service_view
        // return view('back_end.pages_backend.services_backend.show',compact('service',$service));
        // front_end service view
        return view('front_end.pages_frontend.single_service',compact('service',$service));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('back_end.pages_backend.services_backend.edit',compact('service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service_name        = $request->service_name;
        $service_description = $request->service_description;

         //pick id fields for updating
         $service = Service::find($id);

        // update image

        if($request->hasFile('service_image')){
            
            $service->service_image = $request->file('service_image')->move('uploads/services');
        }   
        //end of update image

       
        // db fields
        $service->service_name = $service_name;
        $service->service_description = $service_description;
       

        //update db 
        $service->save();

        return redirect('/services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        
        // redirect
        return redirect('/services');
    }
}
