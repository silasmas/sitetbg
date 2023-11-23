<?php

namespace App\Http\Controllers;

use App\Models\clientregister;
use App\Models\message;
use App\Models\newsletter;
use App\Models\portofolio;
use App\Models\register;
use App\Models\team;
use App\Models\temoignage;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $temoignage = temoignage::all();
        $user = User::all();
        $team = team::all();
        $messages = message::all();
        $newsletters = newsletter::all();
        $register = register::with('client')->get();
        // $client = clientregister::with('register')->get();
        $client = clientregister::selectRaw('registers.grandtitre,registers.titre,clientregisters.*')
            ->join('registers', 'registers.id', 'clientregisters.register_id')
            ->get();
        // dd($client);
        $portofolio = portofolio::with('images')->get();
        return view(
            'home',
            compact('temoignage', 'user', 'team', 'portofolio', 'register', 'client', 'messages', 'newsletters')
        );
    }
}
