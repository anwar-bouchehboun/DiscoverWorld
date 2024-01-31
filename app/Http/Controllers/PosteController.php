<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $destination=Destination::all();
        // dd($destination);
        return view('poste.Post',compact('destination'));
    }


    public function create()
    {
        return view('poste.Addpost');
    }


    public function store(Request $request)
    {
        
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