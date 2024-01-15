<?php

namespace App\Http\Controllers;

use App\Models\Physic;
use Illuminate\Http\Request;

class PhysicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gizi/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gizi/check_gizi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name_of_company' => 'required',
        //     'location' => 'required',
        //     'description' => 'required',
        //     'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        // ]);

        // $fileName = time() . '.' . $request->logo->extension();
        // $request->logo->move(public_path('Logo_company'), $fileName);
        // dd(auth()->user()->id);
        $data_physic = Physic::where('id_user', auth()->user()->id)->first();
        if (!empty($data_physic)) {
            Physic::where('id_user', auth()->user()->id)->update([
                'sleep' => $request->sleep,
                'sleeping' => $request->sleeping,
                'take_bath' => $request->take_bath,
                'eating' => $request->eating,
                'pray' => $request->pray,
                'walking' => $request->walking,
                'climbing' => $request->climbing,
                'bike' => $request->bike,
                'motorcycle' => $request->motorcycle,
                'drive' => $request->drive,
                'sit_down' => $request->sit_down,
                'shopping' => $request->shopping,
                'dishes' => $request->dishes,
                'parenting' => $request->parenting,
                'sweeping_floor' => $request->sweeping_floor,
                'swap_floor' => $request->swap_floor,
                'wash_cloth' => $request->wash_cloth,
                'iron_cloth' => $request->iron_cloth,
                'reading' => $request->reading,
                'typing' => $request->typing,
                'writing' => $request->writing,
            ]);
        } else {
            $physic = new Physic();
            $physic->id_user = auth()->user()->id;
            $physic->sleep = $request->sleep;
            $physic->sleeping = $request->sleeping;
            $physic->take_bath = $request->take_bath;
            $physic->eating = $request->eating;
            $physic->pray = $request->pray;
            $physic->walking = $request->walking;
            $physic->climbing = $request->climbing;
            $physic->bike = $request->bike;
            $physic->motorcycle = $request->motorcycle;
            $physic->drive = $request->drive;
            $physic->sit_down = $request->sit_down;
            $physic->shopping = $request->shopping;
            $physic->dishes = $request->dishes;
            $physic->parenting = $request->parenting;
            $physic->sweeping_floor = $request->sweeping_floor;
            $physic->swap_floor = $request->swap_floor;
            $physic->wash_cloth = $request->wash_cloth;
            $physic->iron_cloth = $request->iron_cloth;
            $physic->reading = $request->reading;
            $physic->typing = $request->typing;
            $physic->writing = $request->writing;
            $physic->save();
        }


        return redirect()->route('result_activity');
    }
    public function result()
    {
        $data_physic = Physic::where('id_user', auth()->user()->id)->first();
        $score = [
            $score_sl = 1 * $data_physic->sleep,
            $score_slng = 1.2 * $data_physic->sleeping,
            $score_eat = 2.3 * $data_physic->eating,
            // dd($score_eat),
            $score_tb = 1.4 * $data_physic->take_bath,
            $score_pr = 1.4 * $data_physic->pray,
            $score_walking = 2.1 * $data_physic->walking,
            $score_climbing = 5.0 * $data_physic->climbing,
            $score_sit_down = 1.2 * $data_physic->sit_down,
            $score_bike = 5.6 * $data_physic->bike,
            $score_motorcycle = 2.7 * $data_physic->motorcycle,
            $score_drive = 2.0 * $data_physic->drive,
            $score_shopping = 4.6 * $data_physic->shopping,
            $score_dishes = 1.7 * $data_physic->dishes,
            $score_parenting = 2.5 * $data_physic->parenting,
            $score_sweeping_floor = 2.3 * $data_physic->sweeping_floor,
            $score_swap_floor = 4.4 * $data_physic->swap_floor,
            $score_wash_cloth = 2.8 * $data_physic->wash_cloth,
            $score_iron_cloth = 3.5 * $data_physic->iron_cloth,
            $score_reading = 1.3 * $data_physic->reading,
            $score_typing = 1.3 * $data_physic->typing,
            $score_writing = 1.4 * $data_physic->writing
        ];
        $total = array_sum($score) / 1440;
        // dd($score, $total);
        return view('gizi/result', compact('total'));
    }
    /**
     * Display the specified resource.
     */
    public function show(Physic $physic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Physic $physic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Physic $physic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Physic $physic)
    {
        //
    }
}
