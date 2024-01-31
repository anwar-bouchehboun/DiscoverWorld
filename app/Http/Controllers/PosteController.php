<?php

namespace App\Http\Controllers;

use App\Models\Recit;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destination =Destination::all();

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
            'paye' => 'required|string|max:255',
            'conseils' => 'required|string|max:255',
            'destinationID' => 'required|exists:destinations,id',
        ]);

        $userid = auth()->user()->id;

        $validatedData['userid'] = $userid;

        Recit::create($validatedData);

        Session::flash('success', 'Post added successfully!');
        return redirect()->back();


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