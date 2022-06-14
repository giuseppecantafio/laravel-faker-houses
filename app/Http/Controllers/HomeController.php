<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class HomeController extends Controller
{
    public function index(){
        $homes = Home::all();
        return view('homeslist', compact('homes'));
    }

    public function show($id){
        $home = Home::findOrFail($id);
        return view('detail', compact('home'));
    }
}
