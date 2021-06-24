<?php

namespace App\Http\Controllers;

use App\Models\Hike;
use Illuminate\Http\Request;

class HikeController extends Controller
{
    // Show all
    public function index()
    {
        // return all the hikes and pass them to the view "index"

        // if there are hikes, return the page of all the hikes else go to create new hike page
        if (sizeof(Hike::all()) > 0) {
            // Get all
            return view('hikes/index', ['hikes' => Hike::all()]);
        } else {
            return view('hikes/create');
        }
    }

    public function show($hike, $slug = null)
    {


        // lookup hike using the id - done

        // work out out to pass the model to the view, to display the props of the hike- done
        // needs to be in array since it could be multiple items?
        return view('hikes/show', ['hike' => Hike::where('id', $hike)->get()]);

        // ext - auto-lookup,

    }

    // Page to create a new hike
    public function create()
    {
        return view('hikes/show', ['hike' => Hike::where('id', $hike)->get()]);
    }

    public function delete($id)
    {
        // delete the item
        Hike::table('hikes')->where('id', '=', $id)->delete();

        // redirect back to the main page
        return redirect('hikes/index');
    }

    public function update($id)
    {
        // update the hike

        // navigate back to the index
        return redirect('hikes/index');
    }
}
