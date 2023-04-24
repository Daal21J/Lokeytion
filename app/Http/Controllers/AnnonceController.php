<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objet;
use App\Models\Annonce;
use App\Models\jourdispo;
use Illuminate\Support\Facades\DB;


class AnnonceController extends Controller
{
    public function showAnnonces()
    {
        return view('annonces');
    }

    public function depot()
    {
        return view('depotAnnonce');
    }


   
    public function mesannonces()
    {
        return view('MesAnnonces');
    }


    public function details($id)
    {
        $commentaires = DB::table('annonces')
                        ->join('comment_annonces', 'comment_annonces.id_annonce', '=', 'annonces.id')
                        ->join('users', 'users.id', '=', 'comment_annonces.id_commenter')
                        ->where('annonces.id', $id)
                        ->get(['comment_annonces.*','users.*']);
    
       $jourdispos = DB::table('annonces')
                ->join('jourdispos', 'jourdispos.id_annonce', '=', 'annonces.id')
                ->where('annonces.id', $id)
                ->where('jourdispos.etat', 'disponible')
                ->get(['jourdispos.*']);

    
        $annonce_objet = DB::table('annonces')
                        ->join('objets', 'annonces.id_objet', '=', 'objets.id')
                        ->where('annonces.id', $id)
                        ->first();
    
                        if($commentaires->isEmpty()){
                            return view('Product_details', compact('jourdispos', 'annonce_objet'));
                        }
                    
                        return view('Product_details', compact('commentaires', 'jourdispos', 'annonce_objet'));   
                    
                    }
                    
}