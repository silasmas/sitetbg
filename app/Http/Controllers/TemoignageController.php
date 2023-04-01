<?php

namespace App\Http\Controllers;

use App\Models\portofolio;
use App\Models\temoignage;
use App\Models\User;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(file_exists(public_path().'/storage/'));
        return view('admin.add_temoignage');
    }
    public function portofolio()
    {
        $portofolio = portofolio::all();
        return view('admin.add_portofolio', compact('portofolio'));
    }
    public function user()
    {
        return view('admin.add_user');
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
        $por = request()->validate([
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'profession' => 'required|min:3',
            'description' => 'required|min:3',
            'photo' => 'required|sometimes|image',
        ]);

        // $temoignage = temoignage::create($por);
        // if (request('photo')) {
        //     $temoignage->update([
        //         'photo' => request('photo')->store('temoin', 'public'),
        //     ]);
        // }

        $file = $request->file('photo');
        $filename = time() . '.' . $file->getClientOriginalName();
        $file->move('storage/temoin', $filename);

        $temoignage = temoignage::create($por);
        if (request('photo')) {
            $temoignage->update([
                'photo' => 'temoin/' . $filename,
            ]);
        }
        return back()->with('message', 'Temoignage bien enregistrer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function show(temoignage $temoignage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function edit(temoignage $temoignage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, temoignage $temoignage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\temoignage  $temoignage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temoignage = temoignage::findOrFail($id);
        $path = public_path() . '/storage/' . $temoignage->photo;
        $rep = $temoignage->delete();

        if ($rep) {
            if (file_exists($path)) {
                unlink($path);
            }

            return response()->json([
                'reponse' => true,
                'msg' => 'Le Témoignage a été supprimer avec succès.',
            ]);
        } else {
            return response()->json([
                'reponse' => false,
                'msg' => 'Erreur de suppression du témoignage',
            ]);
        }
    }

    public function destroy_user($id)
    {
        $user = User::findOrFail($id);
        $rep = $user->delete();

        if ($rep) {
            return response()->json([
                'reponse' => true,
                'msg' => 'Le user a été supprimer avec succès.',
            ]);
        } else {
            return response()->json([
                'reponse' => false,
                'msg' => 'Erreur de suppression du user',
            ]);
        }
    }
}