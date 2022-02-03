<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResursZoo;
use App\Models\Zoo;
use Illuminate\Http\Request;

class ZooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zoos = Zoo::all();
        return ResursZoo::collection($zoos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zoo  $zoo
     * @return \Illuminate\Http\Response
     */
    public function show(Zoo $zoo)
    {
        return new ResursZoo($zoo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zoo  $zoo
     * @return \Illuminate\Http\Response
     */
    public function edit(Zoo $zoo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zoo  $zoo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zoo $zoo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zoo  $zoo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zoo $zoo)
    {
        //
    }
}
