<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function showDemandes(){
        return view('Demandes');
    }

}
