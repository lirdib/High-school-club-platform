<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use Illuminate\Support\Facades\DB;

class SpecificProject extends Controller
{
    public function index(Request $request){
        $data = Projects::all();
        return view('specificProject',compact('data'));
    }
    public function specificProject(Request $request,$id){
        $data = Projects::find($id);

        //$teachers =  DB::table('mesuesit')->join('klubet','klubet.id','=','mesuesit.klubi_ne_kujdesari')->select('mesuesit.emri')->where('klubet.emri','=','rrobotike')->get();//Per te mare emrin e mesuesve te ketij klubi
        return view('specificClub',  compact('data'));
    }
   
}
