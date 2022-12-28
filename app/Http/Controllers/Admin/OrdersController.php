<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Orders';
        $data['categories'] = Helper::getCatalogy();
        $data['brands'] = Helper::getBrands();

        $rows = Order::all();
        return view('admin.templates.orders.orders',compact('data','rows'));
    }

    function list()
    {
        $rows = Order::orderBy('id', 'DESC')->get();

        $html = view('admin.templates.orders.records', compact('rows'))->render();

        return response()->json(array('html'=>$html,'status' => 1,'msg'=>'Successfully Inserted'));
    }

    public function get_row(Request $oRequest)
    {
        $order  = Order::with('user')->find($oRequest->id);
        $order->total = $order->product->sum('total_price');
        $order->product->map(function ($value, $key) {
            return $value->detail;
        });

        return response()->json(['data' => $order]);
    }
}
