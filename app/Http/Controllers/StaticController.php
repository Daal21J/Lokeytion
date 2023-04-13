<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    // public function annonces(){
    //     return view('annonces');
    // }
    // public function comment(){
    //     return view('comment');
    // }
    // public function Demandes(){
    //     return view('Demandes');
    // }
    // public function depotAnnonce(){
    //     return view('depotAnnonce');
    // }
    public function index(){
        return view('index');
    }
    public function login(){
        return view('login');
    }
    // public function MesAnnonces(){
    //     return view('MesAnnonces');
    // }
    // public function panier(){
    //     return view('panier');
    // }
    // public function profile(){
    //     return view('profile');
    // }


}
