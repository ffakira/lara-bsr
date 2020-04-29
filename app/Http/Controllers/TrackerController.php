<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;

class TrackerController extends Controller{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('tracker.index');
    }

    public function index_order(Request $request) {
        $order_number = $request->route('order');
        return view('track.order', compact('order_number'));
    }

}
