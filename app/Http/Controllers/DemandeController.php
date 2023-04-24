<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\User;
use App\Models\Notification;
use App\Models\Objet;
use App\Models\Annonce;
use App\Models\JourDispo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Http\Controllers\UserController;
use Session;


class DemandeController extends Controller
{
    public function showDemande(){
        
        $i=0;
        $j=0;
        $annonces = Annonce::where('id_user', '=', Session::get('loginID'))->get();  
        $clients=array();
        if (count($annonces)>0){
            foreach($annonces as $annonce){
                $temp = $annonce['id'];
                $demandes[$i] = Demande::where('id_annonce', '=', $temp)->where('etat', '=', 'en cours')->get();
                if(count($demandes[$i]) >0){
                    foreach($demandes[$i] as $demande){
                $date1 = Carbon::parse( $demande->created_at);
                $date2 = Carbon::now();
                $diffInDays = $date1->diff($date2)->d;
               
                if($diffInDays >= 1 ){
                    $demande->etat = 'Expirée';
                    $demande->save();
                    $dmd = $demande->id;
                    $notif = Notification::create([
                        'id_user' => $temp,
                        'id_demande' => $dmd,
                        'msg' => ' Votre demande a Expirée ',
                        'etat' => 'unread'
                    ]);
                $notif->save();
                }
                    }
                }
                $i++;
            }
            $i=0;
           
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
            }
            $i++;
        }
        }else {
            $demandes=array();
            $objets=array();
        }
        
        return view('Demandes',['annonces' => $annonces , 'clients' => $clients ,'demandes' => $demandes , 'objets'=> $objets]);
    }


    public function refuse($dmd){

        $demande = Demande::find($dmd);
        $annonce = $demande->id_annonce;
        $temp = $demande->id_client;
        $demande->etat = 'Refusée';
        $demande->save();
        $annonces = Annonce::find($annonce);
        $annonces->status = "active";
        $annonces->save(); 
        $client = User::find($temp);
        $temp = $client['id'];
        $notif = Notification::create([
                'id_user' => $temp,
                'id_demande' => $dmd,
                'msg' => ' Votre demande est refusée ',
                'etat' => 'unread'
            ]);
        $notif->save();

           return  redirect()->route('Demande.show');
        }

   
    public function accept($dmd){

        $demande = Demande::find($dmd);
        $temp = $demande->id_client;
        $demande->etat = 'Acceptée';
        $demande->save();
        $annonce = $demande->id_annonce;
        $annonces = Annonce::find($annonce);
        $annonces->status = "active";
        $annonces->save(); 
        $temp = $demande->id_client;
        $notif = Notification::create([
            'id_user' => $temp,
            'id_demande' => $dmd,
            'msg' => ' Votre demande est Acceptée ',
            'etat' => 'unread'
        ]);
        $notif->save();
        $temp = $demande->id_client;
        $user = User::find(Session::get('loginID'));
        $client = User::find($temp);
        Mail::to($user->email)->send(new SendMail($client,$annonces)); 
       // Mail::to($client->email)->send(new FormMail($annonces,$linkproprietaire));  //add delay
       // Mail::to($user->email)->send(new FormMail($annonces,$linkclient));   //add delay 
        return  redirect()->route('Demande.show');
    }

    
    public function search(Request $dmd){
        $i=0;
        $j=0;
        $clients=array();
        $demandes=array();
        $objets=array();
        $annonces = Annonce::where('id_user', '=', Session::get('loginID'))->where('titre', 'like', '%'.$dmd->keyword.'%' )->get();
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
            
            $annonces = Annonce::where('id_user', '=', Session::get('loginID'))->get();
            foreach($annonces as $annonce){
                $temp = $annonce['id'];
                $objets[$i] = Objet::where('id', '=', $annonce['id_objet'])->where('categorie', 'like','%'.$dmd->keyword.'%' )->get();
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
        
    }
        return view('Demandes',['annonces' => $annonces , 'clients' => $clients ,'demandes' => $demandes , 'objets'=> $objets]);
    }
  
}
