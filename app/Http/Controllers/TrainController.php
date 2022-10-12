<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index(){
        $trains = Train::where('data', '>=', '2022/10/12' )->get();

        return view('home', compact('trains'));
    }
}
