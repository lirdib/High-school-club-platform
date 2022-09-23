<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Clubs;
use App\Models\Events;
class DashboardController extends Controller
{
    
    public function index(){
        $data = User::all();
        return view('ProjectForm',compact('data'));
    }
    public function clubList(){
        $data = Clubs::all();
        return view('clubs.clubList',compact('data'));
    }
    public function eventList(){
        $data = Events::all();
        return view('events.eventsList',compact('data'));
    }
}