<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Recit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //   return view('imagesposte.Addpost',compact('recit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $recit = Recit::all();
        return view('imagesposte.Addpost', compact('recit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {

               $img= $image->store('public');
                Image::create([
                    'recitsID'=>$request->input('recit'),
                    'image'=> $img,
                ]);

            }

            Session::flash('success', 'Post added successfully!');
        return redirect()->back();
        }

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}