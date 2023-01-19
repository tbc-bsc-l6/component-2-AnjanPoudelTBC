<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function fetchMyOrders()
    {
        $userId = Auth::id();

        $myOrderItems = OrderItems::latest()->where('user_id', $userId)->get();

        $orders = OrderController::groupOrders($myOrderItems);
        $prices = OrderController::groupPrices($orders);


        return view('pages.myOrders', ['orders' => $orders, 'prices' => $prices]);
    }

    public function fetchAllOrders()
    {

        $myOrderItems = OrderItems::latest()->get();

        $orders = OrderController::groupOrders($myOrderItems);
        $prices = OrderController::groupPrices($orders);


        return view('pages.admin.orders', ['orders' => $orders, 'prices' => $prices]);
    }

    public static function groupOrders($myOrderItems)
    {

        $orders = [];

        foreach ($myOrderItems  as $orderItem) {
            if (array_key_exists($orderItem->order_id, $orders)) {

                array_push($orders[$orderItem->order_id], $orderItem);
            } else {
                $orders[$orderItem->order_id] = [];
                array_push($orders[$orderItem->order_id], $orderItem);
            }
        }

        return $orders;
    }


    public static function groupPrices($orders)
    {
        $prices = [];
        foreach ($orders  as $orderId => $order) {

            $myOrder = Order::where('id', $orderId)->first();
            // dd($myOrder);



            $prices[$orderId] = $myOrder->total;
        }
        return $prices;
    }
}
