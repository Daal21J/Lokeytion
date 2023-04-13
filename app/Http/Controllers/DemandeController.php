<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function show(){
        return view('Demandes');
    }

}
