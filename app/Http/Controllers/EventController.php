<?php

namespace App\Http\Controllers;
use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index(){
        $eData = Events::all();

        return view('eventet', compact('eData'));
    }
    public function create(){
        return view('events.create');
    }

    public function store(){
        $data = request()->validate(
            [
                'titull' => 'required',
                'description' => 'required',
                'image' => ['required', 'image'],

            ]
            );
        $imagePath = request('image')->store('fotot', 'public');
        
        \App\Models\Events::create([
            'titull' => $data['titull'],
            'description' => $data['description'],
            'image' => $imagePath
        ]);


        return redirect('/');
    }
}
