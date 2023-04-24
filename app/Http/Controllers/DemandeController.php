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
use App\Mail\MyEmail;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;



class DemandeController extends Controller
{
    public function showDemande(){
        
        $i=0;
        $j=0;
        $annonces = Annonce::where('id_user', '=', '2')->get();
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
                    'etat' => 'non lu'
                ]);
            $notif->save();
            }
                }
            }
            $i++;
        }
        $i=0;
        $demandes=array();
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
        $annonces = Annonce::find($annonce);
        $annonces->status = "active";
        $annonces->save(); 
        $jours = JourDispo::where('id_annonce', '=',$annonce )->get();
        foreach($jours as $day){
            for($i=0 ; $i<count($parts);$i++){
                if($parts[$i] == $day->jour){
                    $givenDay = $parts[$i]; // The given day
                    $today = Carbon::today(); // Get today's date
                    $dayOfWeek = $today->dayOfWeek;
            $dayMap = [
                'dimanche' => 0,
                'lundi' => 1,
                'mardi' => 2,
                'mercredi' => 3,
                'jeudi' => 4,
                'vendredi' => 5,
                'samedi' => 6,
            ];
                   $givenDayNumber = $dayMap[strtolower($givenDay)];
                   $daysUntilNextDay = ($givenDayNumber - $dayOfWeek + 7) % 7;
                   $emaildays = 0;
                   if($daysUntilNextDay > $emaildays){
                    $emaildays = $daysUntilNextDay;
                   }
                   $nextDay = $today->copy()->addDays($daysUntilNextDay);
                   $nextDayFormatted = $nextDay->format('Y-m-d');
                   $day->reserved_for = $nextDayFormatted;
                   $day->etat = 'reserve';
                   $day->save();
                }
            }
        }
        $temp = $demande->id_client;
        $notif = Notification::create([
            'id_user' => $temp,
            'id_demande' => $dmd,
            'msg' => ' Votre demande est Acceptée ',
            'etat' => 'non lu'
        ]);
        $notif->save();
        
        // $client = User::find($temp);
        //Mail::to('example@example.com')->send(new MyEmail($data));
       
       
    
      
       
        return  redirect()->route('Demande.show');
    }

    
    public function search(Request $dmd){
        $i=0;
        $j=0;
        $clients=array();
        $demandes=array();
        $objets=array();
        $annonces = Annonce::where('id_user', '=', '1')->where('titre', 'like', '%'.$dmd->keyword.'%' )->get();
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




    public function louer($id, Request $request)
{
    $annonce_objet = DB::table('annonces')
        ->join('objets', 'annonces.id_objet', '=', 'objets.id')
        ->where('annonces.id', $id)
        ->first();

    $demande_exist = Demande::where('id_annonce', $annonce_objet->id)
        ->where('id_client', 2)
        ->first();

    if (!$demande_exist) {
        $validatedData = $request->validate([
            'jours' => 'required|array',
            'jours.*' => 'required|string',
        ]);

        $jours = $validatedData['jours'];
        $jours_str = implode(',', $jours);

        $demande = new Demande;
        $demande->id_client = 2;
        $demande->id_annonce = $annonce_objet->id;
        $demande->etat = 'en cours';
        $demande->jour_reservation =  $jours_str;
        $demande->save();

        // Mettre à jour l'état des jours réservés dans la table "jourdispo"
        $jours_reserves = explode(',', $jours_str);
        foreach ($jours_reserves as $jour_reserve) {
            JourDispo::where('id_annonce', $annonce_objet->id)
                ->where('jour', $jour_reserve)
                ->update(['etat' => 'reserve']);
        }

        // Vérifier s'il reste des jours disponibles pour cette annonce
        $jours_dispo = JourDispo::where('id_annonce', $annonce_objet->id)
            ->where('etat', 'disponible')
            ->exists();

        // Si tous les jours sont réservés, mettre à jour l'état de l'annonce à "desactive"
        if (!$jours_dispo) {
            Annonce::where('id', $annonce_objet->id)->update(['status' => 'desactive']);
        }
    }

    // Rediriger l'utilisateur vers la liste des annonces
    return redirect('/annonces');
}


  
}
