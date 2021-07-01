<?php

namespace App\Http\Controllers;

use App\Models\Hike;
use Illuminate\Http\Request;

class HikeController extends Controller
{
    // Show all , (GET all)
    public function index()
    {
        // return all the hikes and pass them to the view "index"
        $hikes = Hike::all();


        // if there are hikes, return the page of all the hikes else go to create new hike page
        if ($hikes->count()) {
            // Get all
            return view('hikes/index', compact('hikes'));
        } else {
            return view('hikes/create');
        }
    }

    // GET (single) ( RETRIEVE)
    public function show(Hike $hike, $slug = null)
    {
        return view('hikes/show', compact('hike'));

        // the below does the same?
        //return view('hikes/show', [Hike::find($hike)]);
        // perhaps redirect if there is no such hike
    }

    // show edit
    public function edit(Hike $hike, $slug = null)
    {
        return view('hikes/show', compact('hike'));

        // the below does the same?
        //return view('hikes/show', [Hike::find($hike)]);
        // perhaps redirect if there is no such hike
    }

    public function create()
    {
        return view('hikes/create');
    }

    // Page to create a new hike ( INSERT )
    public function store(Request $request)
    {

        // extract and validate the input
        $params = $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:5'
        ]);

        // here if validation succeeds!
        // create a model
        $hike = Hike::create($params);

        // return an approp resp - redirect to index?
        return redirect()->route('hikes.index');
    }

    // ( DELETE / DESTROY)
    public function destroy(Hike $hike)
    {
        // delete the hike from the database
        $hike->delete();

        return redirect()->route('hikes.index');
    }

    // ( UPDATE )
    public function update($hike)
    {
        Hike::where('id', $hike['id'])->update([
            'title' => $hike['title'],
            'description' => $hike['description']
        ]);

        // update the hike
        // Hike::table('hikes')
        //     ->where('id', $hike['id'])
        //     ->update([
        //         'title' => $hike['title'],
        //         'description' => $hike['description']
        //     ]);

        // navigate back to the index
        return redirect('hikes/index');
    }
}
