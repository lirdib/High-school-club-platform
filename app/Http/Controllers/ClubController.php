<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clubs;
use App\Models\Projects;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ClubController extends Controller


{


    public function index(){
        $data = Clubs::all();
        $authUser = Auth::user();
        $authUserRole = $authUser->role_id;
        return view('klubet', compact('data','authUserRole'));
    }

    public function create(){
        return view('clubs.create');
    }

    public function store(){
        $data = request()->validate(
            [
                'emri' => 'required',
                'description' => 'required',
                'image' => ['required', 'image'],

            ]
            );
        $imagePath = request('image')->store('fotot', 'public');

        \App\Models\Clubs::create([
            'emri' => $data['emri'],
            'description' => $data['description'],
            'image' => $imagePath
        ]);

        return redirect('/');
    }
    public function specificClub(Request $request,$id){
        $data = Clubs::find($id);
        $dataOfProjects = DB::table('projektet') -> where('clubs_id', '=',$id)->get();
        $teachers =  DB::table('mesuesit')->where('klubi_ne_kujdesari','=',$id)->select('mesuesit.emri')->get();//Per te mare emrin e mesuesve te ketij klubi
        $club_id = $id;
        return view('specificClub',  compact('data','dataOfProjects','teachers', 'club_id'));
    }

    public function aplikimPerklubin(Request $request,$id){
        return('aplikimPerKlub');
    }
}
