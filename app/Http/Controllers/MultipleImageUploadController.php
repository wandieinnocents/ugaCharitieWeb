<?php

namespace App\Http\Controllers;

use App\Models\MultipleImageUpload;
use Illuminate\Http\Request;

class MultipleImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fetch_images = MultipleImageUpload::all();
        return view('back_end.pages_backend.multipleimages_backend.index',compact('fetch_images'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.pages_backend.multipleimages_backend.create');  

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project                = new MultipleImageUpload();
        $project->heading       = $request->heading;

            // validation
            $request->validate([
                'images' => 'required',
            ]);

            //$heading   = $request->heading; 
             //image upload

         if($request->hasfile('project_image')){
            $file               = $request->file('project_image');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/projects/',$filename);
            $project->project_image   = $filename;
        }

        else{
            return $request;
            $project->project_image = '';
        }
        // end of single image


            //multiple images
            if ($request->hasfile('images')) {
                $images = $request->file('images');

                foreach($images as $image) {
                    $name = $image->getClientOriginalName();
                    $path = $image->storeAs('uploads', $name, 'public');
                    
                    // save data to the database
                    MultipleImageUpload::create([
                        'name'    => $name,
                        'path'    => '/storage/'.$path
                    ]);
                }
            }
            // end of multiple images

         $project->save();

         
         return redirect('/multipleimages')->with('success', 'Images uploaded successfully');
    
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MultipleImageUpload  $multipleImageUpload
     * @return \Illuminate\Http\Response
     */
    public function show(MultipleImageUpload $multipleImageUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MultipleImageUpload  $multipleImageUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(MultipleImageUpload $multipleImageUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MultipleImageUpload  $multipleImageUpload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MultipleImageUpload $multipleImageUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MultipleImageUpload  $multipleImageUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(MultipleImageUpload $multipleImageUpload)
    {
        //
    }
}
