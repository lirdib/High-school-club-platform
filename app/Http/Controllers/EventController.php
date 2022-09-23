<?php

namespace App\Http\Controllers;
use App\Models\Events;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    public function index(){
        $eData = Events::all();
        $authUser = Auth::user();
        $authUserRole = $authUser->role_id;


        return view('eventet', compact('eData','authUserRole'));
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
