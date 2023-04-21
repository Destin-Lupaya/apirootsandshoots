]<?php

//namespace App\Http\Controllers;

use App\Models\Membre;
use App\Http\Requests\StoreMembreRequest;
use App\Http\Requests\UpdateMembreRequest;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Membre::all();

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
     * @param  \App\Http\Requests\StoreMembreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMembreRequest $request)
    {
        // $fileName = time().'.'.$request->file->extension();

        // $request->file->move(public_path('/clubfiles'), $fileName);
        // $url = '/clubiles/'.$fileName;

        // $inputs = $request->inputs;
        //
        $data = [ 
            'name' => $request->name,
            'description' => $request->description,
            'avatar' => $url,
            'statusActive' => $request->statusActive,
            'cashIn' => $request->cashIn,
            'cashOut' => $request->cashOut,
            'hasStock' => $request->hasStock,
            'hasNegativeSold' => $request->hasNegativeSold,
            'points' => $request->points,
            'users_id' => $request->users_id
        ]; 
        function getActivities(){

            return $this->hasMany('App\Models\AccountActivity');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function show(Membre $membre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMembreRequest  $request
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMembreRequest $request, Membre $membre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membre $membre)
    {
        //
    }
}
