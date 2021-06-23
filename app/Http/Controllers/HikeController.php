<?php

namespace App\Http\Controllers;

use App\Models\Hike;
use Illuminate\Http\Request;

class HikeController extends Controller
{
    //
    public function index()
    {
        // return all the hikes and pass them to the view "index"
        return view('hikes/index', ['hikes' => Hike::all()]);
    }

    public function show($hike, $slug = null)
    {


        // lookup hike using the id - done

        // work out out to pass the model to the view, to display the props of the hike- done
        // needs to be in array since it could be multiple items?
        return view('hikes/show', ['hike' => Hike::where('id', $hike)->get()]);

        // ext - auto-lookup,


    }
}
