<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Fiber;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filter = Filter::orderby('id','DESC')->get();
        return response()->json($filter);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Filter $filter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filter $filter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filter $filter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filter $filter)
    {
        //
    }
}
