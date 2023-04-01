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
    public function update(Request $request, team $team)
    {
        //
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