<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Annonce;
use App\Models\objet;
use App\Models\Demande;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function showPanier(){
        $panier = Panier::All();
        $annonces = Annonce::where('status', 'disponible')
                        ->get();
        $objets = Objet::All();
        $prixTotal = 0;
    foreach ($panier as $item) {
        foreach ($annonces as $annonce) {
            if ($item['id_annonce'] == $annonce['id']) {
                $prixTotal += $annonce['prix'];
            }
        }
    }
        return view('panier',compact('panier','annonces','objets','prixTotal'));
    }

    public function deletePanier($id)
    {
        $item = Panier::findOrFail($id);
        $item->delete();
    
        return redirect()->back()->with('success', 'Item deleted successfully!');
    }
    
    public function storeDemande(Request $request)
    {
        $demande = new Demande();
        $demande->id_client = $request->input('id_client');
        $demande->id_annonce = $request->input('id_annonce');
        $demande->etat = 'en attente';
        $demande->jour_reservation = 'empty for now';
        $demande->save();
        
        
        // Remove the item from the panier table
        $item = Panier::where('id',$request->input('id'))->first();
        $item->delete();
    
        return redirect()->back()->with('success', 'Demande created successfully!');
    }

    public function showNotifications(){
        
    }
}
