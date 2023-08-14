<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class ChartController extends Controller
{
    
    public function feedchart()
    {
    $order = DB::table('feedings')->groupBy('status')->orderBy('total')->pluck(DB::raw('count(status) as total'),'status')->all();
    $labels = (array_keys($order));
    
    $data= array_values($order);
    // dd($customer, $data, $labels);
    return response()->json(array('data' => $data, 'labels' => $labels));
    }


    public function waterchart()
    {
    $order = DB::table('waters')->groupBy('status')->orderBy('total')->pluck(DB::raw('count(status) as total'),'status')->all();
    $labels = (array_keys($order));
    
    $data= array_values($order);
    // dd($customer, $data, $labels);
    return response()->json(array('data' => $data, 'labels' => $labels));
    }

    public function filterchart()
    {
    $order = DB::table('filters')->groupBy('status')->orderBy('total')->pluck(DB::raw('count(status) as total'),'status')->all();
    $labels = (array_keys($order));
    
    $data= array_values($order);
    // dd($customer, $data, $labels);
    return response()->json(array('data' => $data, 'labels' => $labels));
    }
}
