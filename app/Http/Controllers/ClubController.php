<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Http\Requests\StoreClubRequest;
use App\Http\Requests\UpdateClubRequest;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  Club::all();
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
     * @param  \App\Http\Requests\StoreClubRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClubRequest $request)
    {
        //


        $data = [ 
            'CodeClub' => $request->CodeClub,
            'NomClub' => $request->NomClub,
            'Avatar' => $url,
            'AnneeAdhesion' => $request->AnneeAdhesion,
            'CodeAffiliation' => $request->CodeAffiliation,
            'TypeAdhesion' => $request->TypeAdhesion,
            'NombreMembres' => $request->NombreMembres,
            'GroupeAge' => $request->GroupeAge,
            'AdresseClub' => $request->AdresseClub,
            'Territoire_Ville' => $request->Territoire_Ville,
            'NomPresidentClub' => $request->NomPresidentClub,
            'NomCoordinateur' => $request->NomCoordinateur,
            'ProfessionCoordinateur' => $request->ProfessionCoordinateur,
            'AdresseCoordinateur' => $request->AdresseCoordinateur,
            'Telephone' => $request->Telephone,
            'mail' => $request->mail,
            'users_id' => $request->users_id
        ]; 
        return Club::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClubRequest  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClubRequest $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
    }
}
