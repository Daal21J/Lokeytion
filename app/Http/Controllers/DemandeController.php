<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\User;
use App\Models\Notification;
use App\Models\Objet;
use App\Models\Annonce;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;


class DemandeController extends Controller
{
    public function showDemande(){
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


    public function refuse($dmd){
            $demande = Demande::find($dmd);
            $temp = $demande->id_client;
            $demande->etat = 'Refusée';
            $demande->save();
            $client = User::find($temp);
            $temp = $client['id'];
            $notif = Notification::create([
                'id_user' => $temp,
                'id_demande' => $dmd,
                'msg' => ' Votre demande est refusée ',
                'etat' => 'non lu'
            ]);
            $notif->save();
            return $temp;
           return  redirect()->route('Demandes.showDemande');
    }

    public function myfnct(){
        return bonjour;
    }
  
}
