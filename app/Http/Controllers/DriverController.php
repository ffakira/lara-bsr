<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Order;
use Illuminate\Http\Request;

class DriverController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $drivers = Driver::all();
        return view('driver.index', compact('drivers'));
    }

    public function assign_driver(Request $request) {
        $order_number = $request->route('order');
        $get_driver_name = Driver::where('name', $request['driver'])->first();
        Order::where('order_number', $order_number)
            ->update(array('driver_id' => $get_driver_name['id']));
    }

    public function driver_orders(Request $request) {
        $driver = $request->route('driver_id');
        $get_driver = Order::where('driver_id', $driver)->get();
        return response()->json($get_driver, '200');
    }

    public function create() {
        return view('driver.create');
    }

    public function store(Request $request) {
        $driver = new Driver($request->all());
        $driver->save();

        return redirect('/driver/create');
    }
}
