<?php

namespace App\Http\Controllers;

use App\Models\Territoire;
use App\Http\Requests\StoreTerritoireRequest;
use App\Http\Requests\UpdateTerritoireRequest;

class TerritoireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTerritoireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTerritoireRequest $request)
    {
        //
        $data = [ 
            'CodeTerritoire' => $request->CodeTerritoire,
            'NomTerritoire' => $request->NomTerritoire,
            'Avatar' => $url,
            'CodeClub' => $request->CodeClub,
            'users_id' => $request->users_id
        ]; 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Territoire  $territoire
     * @return \Illuminate\Http\Response
     */
    public function show(Territoire $territoire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Territoire  $territoire
     * @return \Illuminate\Http\Response
     */
    public function edit(Territoire $territoire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTerritoireRequest  $request
     * @param  \App\Models\Territoire  $territoire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTerritoireRequest $request, Territoire $territoire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Territoire  $territoire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Territoire $territoire)
    {
        //
    }
}
