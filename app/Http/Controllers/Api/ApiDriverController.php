<?php

namespace App\Http\Controllers\Api;

use App\Driver;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class ApiDriverController extends Controller {
    public function index() {
        $drivers = Driver::all();
        return response()->json($drivers, '200');
    }

    // GET all orders
    public function driver_orders(Request $request) {
        $driver = $request->route('driver_id');
        $get_driver = Order::where('driver_id', $driver)->get();
        return response()->json($get_driver, '200');
    }
}
