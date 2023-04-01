<?php

namespace App\Http\Controllers;

use App\Models\clientregister;
use Illuminate\Http\Request;

class ClientregisterController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $por = request()->validate([
        //     'nom' => 'required|min:3',
        //     'email' => 'required|min:3',
        //     'phone' => 'required|min:3',
        // ]);
        // if($por->passes()){
        $siEventExist=clientregister::where([["register_id",$request->register_id],["email",$request->email]])->first();
        $siExiste=clientregister::where([["phone",$request->phone],["email",$request->email]])->first();
        if ($siEventExist) {
            return response()->json([
                'reponse' => false,
                'msg' => 'Impossible de réserver car cette adresse mail a déjà réserver pour cet évènement!',
            ]);
        } else {
            clientregister::create([
                'nom' => $request->nom,
                'email' => $request->email,
                'phone' => $request->phone,
                'pays' => $request->pays,
                'profession' => $request->profession,
                'sexe' => $request->sexe,
                'secteur' => $request->secteur,
                'register_id' => $request->register_id,
            ]);
            return response()->json([
                'reponse' => true,
                'msg' => 'Votre réservation est fait avec succès!',
            ]);

        }
    // }else{
    //     return response()->json([
    //         'reponse' => false,
    //         'msg' => $por->errors()->first(),
    //     ]);
    //   }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientregister  $clientregister
     * @return \Illuminate\Http\Response
     */
    public function show(clientregister $clientregister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientregister  $clientregister
     * @return \Illuminate\Http\Response
     */
    public function edit(clientregister $clientregister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientregister  $clientregister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clientregister $clientregister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientregister  $clientregister
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $regis=clientregister::findOrFail($id);
            $del = $regis->delete();
            if ($del) {
                return response()->json(['reponse' => true,'msg' => "Supression réussit"]);
            } else {
                return response()->json([ 'reponse' => false,'msg' => "Erreur de suppression!"]);
            }

    }
}
