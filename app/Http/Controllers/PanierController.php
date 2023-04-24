<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Panier;


class PanierController extends Controller
{
    public function showPanier(){
        return view('panier');
    }

    public function addToPanier($id, Request $request)
{
    $annonce_objet = DB::table('annonces')
        ->join('objets', 'annonces.id_objet', '=', 'objets.id')
        ->where('annonces.id', $id)
        ->first();

        $panier_exist = Panier::where('id_annonce', $annonce_objet->id)
        ->where('id_client',2)
        ->first();

        if (!$panier_exist) {
        $validatedData = $request->validate([
            'jours' => 'required|array',
            'jours.*' => 'required|string',
        ]);
    
        $jours = $validatedData['jours'];
        $jours_str = implode(',', $jours);


    $Panier = new Panier;
    $Panier->id_annonce = $annonce_objet->id;
    $Panier->id_client = 2;
    $Panier->jour_reservation =  $jours_str;
    $Panier->save();
    }
    // Rediriger l'utilisateur vers la page du panier
    return redirect('/detail/'.$id);
}

}
