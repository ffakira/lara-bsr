<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Venue;

class VenueController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    //@TODO: Create index file
    public function index() {
        $venues = Venue::all();
        return view('venue.index', compact('venues'));
    }

    public function create() {
        return view('venue.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
           'venue' => 'required'
        ]);

        //@TODO: create a relation with order and Venue model
        $venue = new Venue($data);
        $venue->save();
        return redirect('/venue');
    }
}
