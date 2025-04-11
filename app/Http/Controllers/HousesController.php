<?php

namespace App\Http\Controllers;
use App\Models\House;
use Illuminate\Http\Request;

class HousesController extends Controller
{
    public function index()
    {
        $houses = House::all();
        return view('home', compact('houses'));
    }
}
