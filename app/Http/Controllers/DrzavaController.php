<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResursDrzava;
use App\Models\Drzava;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DrzavaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drz = Drzava::all();
        return ResursDrzava::collection($drz);
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
     * @param  \App\Models\Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function show(Drzava $drzava)
    {
        return new ResursDrzava($drzava);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function edit(Drzava $drzava)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drzava $drzava)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'broj_stanovnika' => 'required|integer',
            'predsednik' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $drzava->ime = $request->ime;
        $drzava->broj_stanovnika = $request->broj_stanovnika;
        $drzava->predsednik = $request->predsednik;

        $drzava->save();

        return response()->json(['Država uspešno izmenjena.', new ResursDrzava($drzava)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drzava $drzava)
    {
        $drzava->delete();
        return response()->json(['Država uspešno obrisana.', new ResursDrzava($drzava)]);
    }
}
