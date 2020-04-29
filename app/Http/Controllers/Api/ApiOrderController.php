<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Order;

class ApiOrderController extends Controller {
    public function index() {
        $orders = Order::with(['driver'])
            ->orderBy('created_at', 'desc')
            ->where('status', '!=', 'Complete')
            ->get();
        return response()->json($orders, '200');
    }

    public function complete_orders() {
        $orders = Order::with(['driver'])
            ->orderBy('created_at', 'desc')
            ->where('status', '=', 'Complete')
            ->get();
        return response()->json($orders, '200');
    }
}
