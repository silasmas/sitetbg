<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatemessageRequest;
use App\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $re = Validator::make(
            $request->all(),
            [
                'email' => ['required', 'string'],
                'message' => ['required', 'string'],
                'full_name' => ['required', 'string'],
            ]
        );
        if ($re->passes()) {
            $rep = message::create(
                [
                    "email" => $request->email,
                    "message" => $request->message,
                    "fullname" => $request->full_name,
                ]
            );
            if ($rep) {
                return response()->json(
                    [
                        'reponse' => true,
                        'msg' => 'Message envoyé avec succès',
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
        } else {
            return response()->json(
                [
                    'reponse' => false,
                    'msg' => $re->errors()->first(),
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemessageRequest $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(message $message)
    {
        //
    }
}
