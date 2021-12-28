<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;
class RegistController extends Controller
{
    public function showView()
    {
        $fakultas = Fakultas::get();
        return view('main.registration')->with('fakultas', $fakultas);
    }

    public function submitDataML()
    {
        
    }
}
