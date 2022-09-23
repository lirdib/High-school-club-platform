<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clubs;
use App\Models\ProjectForm;

class DashboardController extends Controller
{

    public function index(){

        return view('Dashboard');
    }

    public function projectForm(){
        $data = Clubs::all();
        return view('projectForm',compact('data'));
    }

    public function kerkesat(){
        $data = ProjectForm::all();
        return view('kerkesat',compact('data'));
    }
    public function store(Request $request){
        $project = new ProjectForm;
        $project->emri_I_nxenesit =  $request->emriNxensit;
        $project->emri_I_projektit =  $request->emriIprojektit;
        $project->pershkrimi_i_projektik =  $request->pershkrimi_i_projektik;
        $project->klubi = $request->klubet;
        $project->statusi = 0;
        $project->save();

        return view('dashboard');
   }

}
