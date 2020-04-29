<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}

	public function index() {
	    //@TODO: Add timer, when order is created
        $orders = Order::all();

        return view('order.index', compact('orders'));
    }

	public function create() {
	    return view('order.create');
	}

	public function history() {
	    return view('order.history');
    }

    public function update_status(Request $request) {
        $order_number = $request->route('order');
        Order::where('order_number', $order_number)
            ->update(array('status' => $request['status']));

    }

	public function store(Request $request) {
        $order = new Order(array(
            'venue_id' => $request->venue_id,
            'order_number' => $request->order_number,
            'order_at' => date('Y-m-d H:i:s', strtotime(date('Y-m-d').$request->order_at.":00")),
            'ready_at' => date('Y-m-d H:i:s', strtotime(date('Y-m-d').$request->ready_at.":00"))
        ));
        $order->save();

		return redirect('/order/create');
	}
}
