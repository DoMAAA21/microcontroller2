<?php

namespace App\Http\Controllers;

use App\Models\water;
use Illuminate\Http\Request;

class WaterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $water = water::orderby('id','DESC')->get();
        return response()->json($water);
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
    public function show(water $water)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(water $water)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, water $water)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(water $water)
    {
        //
    }
}
