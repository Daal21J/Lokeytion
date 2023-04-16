<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\User;
use App\Models\Objet;
use App\Models\Annonce;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function show(){
        $i=0;
        $j=0;
        $annonces = Annonce::where('id_user', '=', '1')->get();
        foreach($annonces as $annonce){
            $temp = $annonce['id'];
            $objets[$i] = Objet::where('id', '=', $annonce['id_objet'])->get();
            $demandes[$i] = Demande::where('id_annonce', '=', $temp)->get();
        foreach($demandes[$i] as $demande){
            $temp2 = $demande['id_client'] ;
            $clients[$j] = User::where('id', '=', $temp2)->get(); 
            $j++;
        }
        $i++;
      }
        return view('Demandes',['annonces' => $annonces , 'clients' => $clients ,'demandes' => $demandes , 'objets'=> $objets]);
    }


    public function refuse($demande){
            

    }
  
}
