<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProjectsController extends Controller
{
    public function create(){
        return view('projects.create');
    }
    public function store(){
        $data = request() -> validate([
            'dega' => 'required',
            'anetaret' => 'required',
            'projekti' => 'required',
            'supervizori' => 'required',
        ]);
        //dd($data);

        \App\Models\Projects::create($data);
        return redirect('/');
    }
