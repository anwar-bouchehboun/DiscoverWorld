<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Recit;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Adventure = Recit::all();
       $countRecit=Recit::count();
       $count = Recit::count('destinationID');
        $Users = User::count();
        //  dd($countRecit,$count,$totalUsers);
        return view('welcome', compact('Adventure','countRecit','count','Users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Recit $item)
     {
    //  $recit = Recit::findOrFail($item->id);
    //     $images = Image::where('recitsID', $recit->id)->get();
        // dd($images);
        $recit = Recit::findOrFail($item->id);
        $images = $recit->images;
        $countRecit=Recit::count();
        $count = Recit::count('destinationID');
         $Users = User::count();
          return view('adventure',compact('images','recit','countRecit','count','Users'));
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
