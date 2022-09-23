<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Clubs;

class ProjectsController extends Controller
{
    public function create(Request $request, $id){
        //dd($request->only('current_club_id'));
        $club_id = $id;
        return view('projects.create', compact('club_id'));
    }
    public function store(Request $request, $id){
        $data = request() -> validate([
            'dega' => 'required',
            'anetaret' => 'required',
            'projekti' => 'required',
            'supervizori' => 'required',
        ]);
        \App\Models\Clubs::find($id)->projects()->create($data);
        
        return redirect('/');
    }
    public function projectForm(Request $request){
        $data = Clubs::all();
        return view('ProjectForm',compact('data'));
    }
}