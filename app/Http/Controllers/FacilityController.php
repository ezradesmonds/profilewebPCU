<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class FacilityController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('pages.facility', compact('fasilitas'));
    }
}
