<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnonceController extends Controller
{
   

    public function depot(){
        return view('depotAnnonce');
    }

    public function mesannonces(){
        return view('MesAnnonces');
    }
    public function details(){
        return view('Product_details');
    }
}
