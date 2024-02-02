<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Recit;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destination = Cache::remember('destinations_all', 60, function () {
            return Destination::all();
        });

        return view('poste.Post', compact('destination'));
    }


    public function create()
    {
        // return view('imagesposte.Addpost');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'paye' => 'required|numeric',
            'conseils' => 'required|string|max:1000',
            'destinationID' => 'required|exists:destinations,id',
        ]);

        $validatedData['userid'] = auth()->user()->id;

         $recit = Recit::create($validatedData);



        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('recit','public');
                    //  dd( $path);
                $recit->images()->create([
                    // 'path' => $path,
                    'image' => $path,
                ]);
            }


            Session::flash('success', 'Post added successfully!');
            return redirect()->back();
        }




    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}