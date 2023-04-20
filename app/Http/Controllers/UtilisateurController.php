<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Http\Requests\StoreUtilisateurRequest;
use App\Http\Requests\UpdateUtilisateurRequest;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Utilisateur::all();
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
     * @param  \App\Http\Requests\StoreUtilisateurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUtilisateurRequest $request)
    {
        //
        return Utilisateur::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateur $utilisateur)
    {
        //
        return Utilisateur::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUtilisateurRequest  $request
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUtilisateurRequest $request, Utilisateur $utilisateur)
    {
        //
        $utilisateur =  Utilisateur::find($id);
        $utilisateur->update($request->all());

        return $utilisateur;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateur $utilisateur)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    /**
     * look for a specific resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $utilisateurForm = (array) $request->all();

        $email = isset($utilisateurForm['email']) ? $utilisateurForm['email'] : '';
        $psw = isset($utilisateurForm['psw']) ? $utilisateurForm['psw'] : '';

        $utilisateur = Users::where('email', '=', $email)->orwhere('telephone', '=', $email)->get();

        $status = "404";

        if (count($utilisateur) > 0) {

            if ($utilisateur[0]['psw'] == $psw) {
                if ($utilisateur[0]['statusActive'] == 0) {
                    return response()->json(["message" => "Votre compte a été désactivé, veuillez contacter votre administrateur"], 403);
                }

                $status = "200";
                $utilisateur = $utilisateur[0];
                $account = Utilisateur::find($utilisateur['id'])->getAccount;

                $authToken = $utilisateur->createToken('auth-token')->plainTextToken;

                $response = ['utilisateur' => $utilisateur, 'account' => $account, 'access-token' => $authToken];
            } else {

                $response = ["message" => 'wrong password'];
            }
        } else {

            $response = ["message" => 'wrong email ou telephone'];
        }

        return response()->json($response, $status);
    }


}
