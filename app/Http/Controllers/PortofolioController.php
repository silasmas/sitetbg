<?php

namespace App\Http\Controllers;

use App\Models\clientregister;
use App\Models\images;
use App\Models\portofolio;
use App\Models\register;
use App\Models\team;
use App\Models\temoignage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortofolioController extends Controller
{
    public function changeLanguage($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = register::where('etat', 'active')->first();

        return view('pages.register', compact('form'));
    }

    public function accueil()
    {
        $img = portofolio::all();
        $event = register::where('etat', 'active')->get();
        // dd($event->isEmpty());
        $temoin = temoignage::inRandomOrder()
            ->take(6)
            ->get();
        $travail = portofolio::inRandomOrder()
            ->take(10)
            ->get();
        $t1 = team::all();
        $t2 = team::where('niveau', '2')->get();
        $t3 = team::where('niveau', '3')->get();

        return view(
            'pages.Accueil',
            compact('temoin', 'travail', 't1', 't2', 't3', 'event')
        );
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
    public function store_galeri(Request $request)
    {
        // dd($request->file());
        $por = request()->validate([
            'portofolio_id' => 'required',
            'img1' => 'sometimes',
            'img2' => 'sometimes',
            'img3' => 'sometimes',
        ]);

        $file = $request->file('img1');
        $filenameImg1 = time() . '.' . $file->getClientOriginalName();
        $file->move('storage/galeri', $filenameImg1);

        $file2 = $request->file('img2');
        $filenameImg2 = time() . '.' . $file2->getClientOriginalName();
        $file2->move('storage/galeri', $filenameImg2);

        $file3 = $request->file('img3');
        $filenameImg3 = time() . '.' . $file3->getClientOriginalName();
        $file3->move('storage/galeri', $filenameImg3);

        $gal1 = images::create([
            'portofolio_id' => $request->portofolio_id,
            'image' => 'galeri/' . $filenameImg1,
        ]);
        $gal2 = images::create([
            'portofolio_id' => $request->portofolio_id,
            'image' => 'galeri/' . $filenameImg2,
        ]);
        $gal2 = images::create([
            'portofolio_id' => $request->portofolio_id,
            'image' => 'galeri/' . $filenameImg3,
        ]);

        return back()->with('message', 'Image bien enregistrée');
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
            'titre' => 'required|min:3',
            'slogant' => 'required|min:3',
            'description' => 'required|min:3',
            'date' => 'required|date|min:3',
            'cover' => 'required|sometimes',
        ]);

        $file = $request->file('cover');
        $file2 = $request->file('photo_formateur');
        $filenamecover = time() . '.' . $file->getClientOriginalName();
        $file->move('storage/cover', $filenamecover);

        $filenameformateur = time() . '.' . $file2->getClientOriginalName();
        $file2->move('storage/img_formateur', $filenameformateur);

        $portofolio = portofolio::create([
            'titre' => ['fr' => $request->titre, 'en' => $request->titre_en],
            'slogant' => $request->slogant,
            'type' => $request->service,
            'adresse' => $request->adresse,
            'cible' => $request->cble,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'formateur' => $request->formateur,
            'description' => ['fr' => $request->description, 'en' => $request->description_en],
            'date' => $request->date,
            'cover' => 'cover/' . $filenamecover,
            'photo_formateur' => 'img_formateur/' . $filenameformateur,
        ]);

        return back()->with('message', 'Portofolio bien enregistrer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function detail($id): View
    {
        // dd($id);
        $type = $id;
        $travail = portofolio::get();
        $travails = portofolio::where('type', $id)->get();

        return view('pages.detail-service', compact('type', 'travail', "travails"));
    }
    public function show($id): View
    {
        // dd("ok");
        $img = portofolio::findOrFail($id);
        $travail = portofolio::get();
        // $travail = portofolio::where('slogant', $img->slogant)->get();
        $img->load('images');
        // dd($img);
        // return view('pages.detail');
        return view('pages.detail', compact('img', 'travail'));
    }
    public function showRegister($id)
    {
        $event = register::findOrFail($id);
        $cl = clientregister::where('register_id', $id)->get();
        //  dd($event->id);
        return view('pages.register', compact('event', 'cl'));
    }

    // public function envoi_mail(Request $req)
    // {
    //     Mail::to('silasjmas@gmail.com')->send(new visitorMail($req));
    //     return response()->json([
    //         'msg' => 'Le message est envoyer avec succè.',
    //     ]);
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img = images::where("portofolio_id", $id);
        if ($img) {
            foreach ($img as $v) {
                $pat = public_path() . 'storage/' . $v->image;
                unlink($pat);
            }
            $delimg = $img->delete();
            if ($delimg) {
                $porto = portofolio::findOrFail($id);
                $path1 = public_path() . '/storage/' . $porto->cover;
                $path = public_path() . '/storage/' . $porto->photo_formateur;
                $rep = $porto->delete();

                if ($rep) {
                    if (file_exists($path1) && file_exists($path)) {
                        unlink($path);
                        unlink($path1);
                    }

                    return response()->json([
                        'reponse' => true,
                        'msg' => 'Activité a été supprimer avec succès.',
                    ]);
                } else {
                    return response()->json([
                        'reponse' => false,
                        'msg' => "Erreur de suppression de l'agent",
                    ]);
                }
            } else {
                return response()->json([
                    'reponse' => false,
                    'msg' => "Erreur de suppression de l'image",
                ]);
            }
        } else {
            $porto = portofolio::findOrFail($id);
            $path1 = public_path() . '/storage/' . $porto->cover;
            $path = public_path() . '/storage/' . $porto->photo_formateur;
            $rep = $porto->delete();

            if ($rep) {
                if (file_exists($path1) && file_exists($path)) {
                    unlink($path);
                    unlink($path1);
                }

                return response()->json([
                    'reponse' => true,
                    'msg' => 'Activité a été supprimer avec succès.',
                ]);
            } else {
                return response()->json([
                    'reponse' => false,
                    'msg' => "Erreur de suppression de l'agent",
                ]);
            }
        }
    }
}
