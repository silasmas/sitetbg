<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_team');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = request()->validate([
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'poste' => 'required|min:2',
            'niveau' => 'required',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'tweeter' => 'nullable',
            'linkedin' => 'nullable',
            'photo' => 'required|sometimes|image',
        ]);

        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalName();
        $file->move('storage/team', $filename);
        $teams = team::create($team);
        if (request('photo')) {
            $teams->update([
                'photo' => 'team/' . $filename,
            ]);
        }
        //   dd($request->nom);
        return back()->with('message', 'Enregistrement fait avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $event)
    {
        $events = $event::find($request->id);
        $nom = $request->nom == $events->nom ? $events->nom : $request->nom;
        $prenom = $request->prenom == $events->prenom ? $events->prenom : $request->prenom;
        $poste = $request->poste == $events->poste ? $events->poste : $request->poste;
        $linkedin = $request->linkedin == $events->linkedin ? $events->linkedin : $request->linkedin;
        $tweeter = $request->tweeter == $events->tweeter ? $events->tweeter : $request->tweeter;
        $facebook = $request->facebook == $events->facebook ? $events->facebook : $request->facebook;
        $instagram = $request->instagram == $events->instagram ? $events->instagram : $request->instagram;
        $image = "";

        if ($request->file("photoTeam") != null) {
            $photo = public_path() . '/storage/team/' . $events->photo;
            file_exists($photo) ? unlink($photo) : '';
            $image = 'team/' . time() . '.' . $request->file("photoTeam")->getClientOriginalName();
            $request->file("photoTeam")->move('storage/team', $image);
        } else {
            $image = $events->photo;
        }
        // dd($rap);
        $rep = $events->update([
            "nom" => $nom,
            "prenom" => $prenom,
            "poste" => $poste,
            "facebook" => $facebook,
            "linkedin" => $linkedin,
            "tweeter" => $tweeter,
            "instagram" => $instagram,
            "photo" => $image,
        ]);
        if ($rep) {
            return response()->json(
                [
                    'reponse' => true,
                    'msg' => 'Mis à jour Réussie!',
                ]
            );
        } else {
            return response()->json(
                [
                    'reponse' => false,
                    'msg' => 'Erreur',
                ]
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = team::findOrFail($id);
        $path = public_path() . '/storage/' . $team->photo;
        $rep = $team->delete();

        if ($rep) {
            if (file_exists($path)) {
                unlink($path);
            }

            return response()->json([
                'reponse' => true,
                'msg' => 'Agent a été supprimer avec succès.',
            ]);
        } else {
            return response()->json([
                'reponse' => false,
                'msg' => "Erreur de suppression de l'agent",
            ]);
        }
    }
}
