<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request){
        $data = Students::all();
        return view('main', ['data' => $data]);
    }

}
