<?php

namespace App\Http\Controllers;

use App\Models\Fastfood;
use Illuminate\Http\Request;

class FastfoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data_ff = Fastfood::where('id_user', auth()->user()->id)->first();
        if (!empty($data_ff)) {
            Fastfood::where('id_user', auth()->user()->id)->update([
                'burger' => $request->burger,
                'nugget' => $request->nugget,
                'pizza' => $request->pizza,
                'fried_chicken' => $request->fried_chicken,
                'friend_french' => $request->friend_french,
                'spaghetti' => $request->spaghetti,
                'sosis' => $request->sosis,
                'sandwich' => $request->sandwich,
                'ice_cream' => $request->ice_cream,
                'cokelat' => $request->cokelat,
                'permen' => $request->permen,
                'donat' => $request->donat,
                'soda' => $request->soda
            ]);
        } else {
            $ff = new Fastfood();
            $ff->id_user = auth()->user()->id;
            $ff->burger = $request->burger;
            $ff->nugget = $request->nugget;
            $ff->pizza = $request->pizza;
            $ff->fried_chicken = $request->fried_chicken;
            $ff->friend_french = $request->friend_french;
            $ff->spaghetti = $request->spaghetti;
            $ff->sosis = $request->sosis;
            $ff->sandwich = $request->sandwich;
            $ff->ice_cream = $request->ice_cream;
            $ff->cokelat = $request->cokelat;
            $ff->permen = $request->permen;
            $ff->donat = $request->donat;
            $ff->soda = $request->soda;
        }
        return view('gizi/fast_food');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function result()
    {
        return view('result/fastfood');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fastfood $fastfood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fastfood $fastfood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fastfood $fastfood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fastfood $fastfood)
    {
        //
    }
}
