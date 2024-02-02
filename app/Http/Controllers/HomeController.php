<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Recit;
use App\Models\Destination;
use Carbon\Carbon;
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
        $countRecit = Recit::count();
        // $countRecit = Recit::join('users', 'recits.userid', '=', 'users.id')->count();
        $count = Recit::distinct('destinationID')->count();
        // $Users = User::count();
        $Users = Recit::join('users', 'recits.userid', '=', 'users.id')->count();

        $destination = Destination::all();

        //  dd($countRecit,$count,$totalUsers);
        return view('welcome', compact('Adventure', 'countRecit', 'count', 'Users', 'destination'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Recit $item)
    {
        //  $recit = Recit::findOrFail($item->id);
        //     $images = Image::where('recitsID', $recit->id)->get();
        // dd($images);
        $recit = Recit::findOrFail($item->id);
        $images = $recit->images;
        return view('adventure', compact('images', 'recit'));
    }


    public function filterAdventures(Request $request)
    {
        $Adventure = Recit::all();
        if ($request->input('city') == '') {
            redirect('home');
        }
        if ($request->has('city')) {
            $selectedCityId = $request->input('city');
            $destination = Recit::where('destinationID', $selectedCityId)->get();
            if ($destination->count() > 0 && $destination != null) {
                $Adventure = $destination;
                $countRecit = Recit::count();
                $count = Recit::distinct('destinationID')->count();
                // $Users = User::count();
                $Users = Recit::join('users', 'recits.userid', '=', 'users.id')->count();

                $destination = Destination::all();
                return view('welcome', compact('Adventure', 'countRecit', 'count', 'Users', 'destination'));


            } else {
                $Adventure = null;
                // dd($Adventure);
                $countRecit = Recit::count();
                $count = Recit::distinct('destinationID')->count();
                // $Users = User::count();
                $Users = Recit::join('users', 'recits.userid', '=', 'users.id')->count();

                $destination = Destination::all();
                return view('welcome', compact('Adventure', 'countRecit', 'count', 'Users', 'destination'));


            }

        }


    }





    public function filterdate(Request $request)
    {
        $Adv = Recit::query();
        $date = $request->datefilter;

        switch ($date) {
            case 'recentes':
                $Adv->orderBy('created_at', 'DESC');
                break;
            case 'anciennes':
                $Adv->orderBy('created_at', 'ASC');
                break;
            default:
                break;
        }


        $Adventure = $Adv->get();

        $countRecit = Recit::count();
        $Users = Recit::join('users', 'recits.userid', '=', 'users.id')->count();

        $count = Recit::distinct('destinationID')->count();
        // $Users = User::count();
        $destination = Destination::all();

        return view('welcome', compact('Adventure', 'countRecit', 'count', 'Users', 'destination'));
    }

}
