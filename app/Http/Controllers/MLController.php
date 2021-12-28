<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fakultas;
class MLController extends Controller
{
    public function showView()
    {
        $fakultas = Fakultas::get();
        dd($fakultas);
        return view('main.registration')->with('fakultas', $fakultas);
    }

    public function submitData()
    {
        
    }
}
