<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\images;
use App\Mail\visitorMail;
use App\Models\clientregister;
use App\Models\portofolio;
use App\Models\register;
use App\Models\temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form=register::where('etat','active')->first();
       
        return view('pages.register',compact('form'));
    }

    public function accueil()
    {
        $event = register::where('etat','active')->get();
       // dd($event->isEmpty());
        $temoin = temoignage::inRandomOrder()
            ->take(6)
            ->get();
        $travail = portofolio::inRandomOrder()
            ->take(10)
            ->get();
        $t1 = team::where('niveau', '1')->get();
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
            'formateur' => 'required|min:3',
            'description' => 'required|min:3',
            'profession_formateur' => 'required|min:3',
            'date' => 'required|date|min:3',
            'video' => 'min:3',
            'cover' => 'required|sometimes',
            'photo_formateur' => 'required|sometimes',
        ]);

        // $portofolio = portofolio::create($por);
        // //  dd($portofolio->cover);
        // if (request('cover') && request('photo_formateur')) {
        //     // $p = new portofolio();
        //     $portofolio->update([
        //         'cover' => request('cover')->store('cover', 'public'),
        //         'photo_formateur' => request('photo_formateur')->store(
        //             'img_formateur',
        //             'public'
        //         ),
        //     ]);
        // }

        $file = $request->file('cover');
        $file2 = $request->file('photo_formateur');
        $filenamecover = time() . '.' . $file->getClientOriginalName();
        $file->move('storage/cover', $filenamecover);

        $filenameformateur = time() . '.' . $file2->getClientOriginalName();
        $file2->move('storage/img_formateur', $filenameformateur);

        $portofolio = portofolio::create($por);

        if (request('cover') && request('photo_formateur')) {
            $portofolio->update([
                'cover' => 'cover/' . $filenamecover,
                'photo_formateur' => 'img_formateur/' . $filenameformateur,
            ]);
        }
        //return redirect('admin.add_portofolio')->with('message','portofolio bien enregistrer');
        return back()->with('message', 'Portofolio bien enregistrer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $img = portofolio::findOrFail($id);
        $sim = portofolio::where('slogant', $img->slogant)->get();
        $img->load('images');
        // dd($img->images);
        return view('pages.detail', compact('img', 'sim'));
    }
    public function showRegister($id)
    {
        $event = register::findOrFail($id);
        $cl=clientregister::where('register_id',$id)->get();
        //  dd($event->id);
        return view('pages.register', compact('event','cl'));
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
        $img = images::findOrFail($id);
        if ($img) {
            foreach ($img as $v) {
                $pat = public_path() . '/galeri/' . $v->image;
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
