<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\User;
use App\Models\Notification;
use App\Models\Objet;
use App\Models\Annonce;
use App\Models\JourDispo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;
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
            $demandes[$i] = Demande::where('id_annonce', '=', $temp)->where('etat', '=', 'en cours')->get();
        if(count($demandes[$i]) >0){
            foreach($demandes[$i] as $demande){
                $temp2 = $demande['id_client'] ;
                $clients[$j] = User::where('id', '=', $temp2)->get(); 
                $j++;
            }
        }else {
            $clients=array();
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

           return  redirect()->route('Demande.show');
        }

   
    public function accept($dmd){

        $demande = Demande::find($dmd);
        $temp = $demande->id_client;
        $demande->etat = 'Acceptée';
        $demande->save();
        $parts = explode(",", $demande->jour_reservation);
        $annonce = $demande->id_annonce;
      
        $jours = JourDispo::where('id_annonce', '=',$annonce )->get();
        foreach($jours as $day){
            for($i=0 ; $i<count($parts);$i++){
                if($parts[$i] == $day->jour){
                    $day->etat = 'reserve';
                    $day->save();
                }
            }
        }
        
      /*  $client = User::find($temp);
        //Mail::to('example@example.com')->send(new MyEmail($data));
        $temp = $client['id'];
        $notif = Notification::create([
            'id_user' => $temp,
            'id_demande' => $dmd,
            'msg' => ' Votre demande est Acceptée ',
            'etat' => 'non lu'
        ]);
        $notif->save();*/
       
        return  redirect()->route('Demande.show');
    }

    
    public function search(Request $dmd){
        $i=0;
        $j=0;
        $clients=array();
        $demandes=array();
        $objets=array();
        $annonces = Annonce::where('id_user', '=', '1')->where('titre', 'like', $dmd->keyword.'%' )->get();
        if(count($annonces)>0){
            foreach($annonces as $annonce){
                $temp = $annonce['id'];
                $objets[$i] = Objet::where('id', '=', $annonce['id_objet'])->get();
       
                $demandes[$i] = Demande::where('id_annonce', '=', $temp)->where('etat', '=', 'en cours')->get();
            if(count($demandes[$i]) >0){
                foreach($demandes[$i] as $demande){
                    $temp2 = $demande['id_client'] ;
                    $clients[$j] = User::where('id', '=', $temp2)->get(); 
                    $j++;
                }
            
               
            $i++;
        }
    }
        }else {
            
            $annonces = Annonce::where('id_user', '=', '2')->get();
            foreach($annonces as $annonce){
                $temp = $annonce['id'];
                $objets[$i] = Objet::where('id', '=', $annonce['id_objet'])->where('categorie', 'like',$dmd->keyword.'%' )->get();
            if(count($objets[$i])>0){
                $demandes[$i] = Demande::where('id_annonce', '=', $temp)->where('etat', '=', 'en cours')->get();
            if(count($demandes[$i]) >0){
                foreach($demandes[$i] as $demande){
                    $temp2 = $demande['id_client'] ;
                    $clients[$j] = User::where('id', '=', $temp2)->get(); 
                    $j++;
                }
            }
            $i++;
          }
        }
        
       // return $demandes;
    }
        return view('Demandes',['annonces' => $annonces , 'clients' => $clients ,'demandes' => $demandes , 'objets'=> $objets]);
    }
  
}
