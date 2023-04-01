<?php

namespace App\Http\Controllers;

use App\Models\clientregister;
use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
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

        return view('admin.add_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = Validator::make($request->all(),[
            'titre' => 'required|min:3',
            'grandtitre' => 'required|min:3',
            'description' => 'required|min:2',
            'banniere' => 'required|sometimes|image',
        ]);
        if($form->passes()){
            $visuelpaiementname='';
                $file = $request->file('banniere');
                $filename = 'banniere/'.time() . '.' . $file->getClientOriginalName();
                $file->move('storage/banniere', $filename);
                if($request->categorie=='payant'){
                $visuelpaiement = $request->file('visuelpaiement');
                $visuelpaiementname = 'visuel/'.time() . '.' . $visuelpaiement->getClientOriginalName();
                $visuelpaiement->move('storage/visuel', $visuelpaiementname);
                }

                $forms = register::create([
                    'titre' => $request->titre,
                    'grandtitre' => $request->grandtitre,
                    'quota' => $request->quota,
                    'categorie' => $request->categorie,
                    'date_bedut' => $request->date_debut,
                    'date_fin' => $request->date_fin,
                    'lienPaiement' => $request->lienPaiement,
                    'description' => $request->description,
                    'banniere' => $filename,
                    'visuelpaiement' => $visuelpaiementname,
                    'etat' => $request->etat,
                ]);
                return back()->with('message', 'Enregistrement fait avec succès');

    }else{
        return back()->with(['message'=>$form->errors()->first()]);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rap =register::findOrFail($request->id);
        // dd($rap);
        $rep= $rap->update([
             'etat' => $request->etat,
         ]);
         if($rep){
            return back()->with('message', 'La modification est faite avec succès');
             //return response()->json(["reponse"=>true,"msg"=>"La modification est faite avec succès."]);
         }else{
            // return response()->json(["reponse"=>false,"msg"=>"Erreur du modification"]);
             return back()->with('erreur', 'Erreur du modification');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $et=register::findOrFail($id);
        if($et->etat=='active'){
            return response()->json([
                'reponse' => false,
                'msg' => "Cet évènement ne peut être supprimer car il est publier, merci de le cloturer puis poursuivre l'action!",
            ]);
        }else{
            $clientExist = clientregister::where('register_id',$id)->get();
            if ($clientExist->isEmpty()) {
                $regis=register::findOrFail($id);
                $del = $regis->delete();
                if ($del) {
                    return response()->json([
                        'reponse' => true,
                        'msg' => "Supression réussit",
                    ]);
                } else {
                    return response()->json([
                        'reponse' => false,
                        'msg' => "Erreur de suppression!",
                    ]);
                }
            } else {
                    return response()->json([
                        'reponse' => false,
                        'msg' => "Cet évènement ne peut être supprimer car il a au-moins une réservation!",
                    ]);
            }
        }

    }
}
