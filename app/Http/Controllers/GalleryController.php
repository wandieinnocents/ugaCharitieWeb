<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('back_end.pages_backend.galleries_backend.index',compact('galleries'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallery_categories = GalleryCategory::all();
        return view('back_end.pages_backend.galleries_backend.create',compact('gallery_categories'));   
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = new Gallery();
        
        $gallery->gallery_category_id   = $request->gallery_category_id;
        $gallery->title                 = $request->title;
        $gallery->description           = $request->description;

        //image upload
        $gallery->gallery_image = $request->file('gallery_image')->move('uploads/galleries');


        // save data to the db
        $gallery->save();
        // redirect
        return redirect('/galleries');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('back_end.pages_backend.galleries_backend.show',compact('gallery',$gallery));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        // gallery categories fetch
        $gallery_categories = GalleryCategory::all();
        return view('back_end.pages_backend.galleries_backend.edit',compact('gallery','gallery_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $gallery_category_id   = $request->gallery_category_id;
        $title                 = $request->title;
        $description           = $request->description;

        //pick id fields for updating
        $gallery = Gallery::find($id);

        // update image
        if($request->hasFile('gallery_image')){

            // validate image
            $request->validate([
              'gallery_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $gallery->gallery_image = $request->file('gallery_image')->move('uploads/galleries');
        }
        //end of update image

        // db fields
        $gallery->gallery_category_id = $gallery_category_id;
        $gallery->title               = $title;
        $gallery->description         = $description;

        //update db 
        $gallery->save();

        return redirect('/galleries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        // redirect
        return redirect('/galleries');
    }
}
