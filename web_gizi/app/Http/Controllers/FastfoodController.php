<?php

namespace App\Http\Controllers;

use App\Models\Ava;
use App\Models\Fastfood;
use App\Models\Journal;
use Illuminate\Http\Request;

class FastfoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function daily_journal()
    {
        $daily_journal = Journal::where('id_user', auth()->user()->id)->get();
        // dd($daily_journal);
        return view('gizi/daily_journal', compact('daily_journal'));
    }
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
            $ff->birthday = $request->birthday;
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
    public function profile(Request $request)
    {
        $request->validate([
            'place_birth' => 'required',
            'birthday' => 'required',
            'no_hp' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'photo_profile' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $fileName = time() . '.' . $request->logo->extension();
        $request->photo_profile->move(public_path('photo_profile'), $fileName);


        $ava = Ava::where('id_user', auth()->user()->id)->first();
        if (!empty($ava)) {
            Ava::where('id_user', auth()->user()->id)->update([
                'id_user' => auth()->user()->id,
                'place_birth' => $request->place_birth,
                'birthday' => $request->pizza,
                'no_hp' => $request->no_hp,
                'gender' => $request->gender,
                'age' => $request->age,
                'gender' => $request->gender,
                'photo_profile' => 'photo_profile/' . $fileName,
            ]);
        } else {
            $person = new Ava();
            $person->place_birth = $request->place_birth;
            $person->birthday = $request->birthday;
            $person->no_hp = $request->no_hp;
            $person->age = $request->age;
            $person->gender = $request->gender;
            $person->photo_profile = 'photo_profile/' . $fileName;
            $person->save();
        }
        return redirect()->route('daily_fastfood');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $daily_jurnal = new Journal();
        $daily_jurnal->id_user = auth()->user()->id;
        $daily_jurnal->date_day = $request->date_day;
        $daily_jurnal->fastfood = $request->fastfood;
        $daily_jurnal->sum = $request->sum;
        $daily_jurnal->save();
        return redirect()->route('fastFood_track');
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
