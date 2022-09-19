<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clubs;
use Illuminate\Support\Facades\DB;
class ClubController extends Controller


{


    public function index(){

        $data = Clubs::all();

        return view('klubet', compact('data'));
    }
    public function specificClub(Request $request,$id){
        $data = Clubs::find($id);

        $teachers =  DB::table('mesuesit')->join('klubet','klubet.id','=','mesuesit.klubi_ne_kujdesari')->select('mesuesit.emri')->where('klubet.emri','=','rrobotike')->get();//Per te mare emrin e mesuesve te ketij klubi
        return view('specificClub',  compact('data','teachers'));
    }
}
