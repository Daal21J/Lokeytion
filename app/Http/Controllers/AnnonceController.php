<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;

class AnnonceController extends Controller
{
    public function showAnnonces($id){
        $data = User::findOrFail($id);

        $annonce_display = DB::table('annonces')
                        ->where('status','=','oui')
                        ->latest()
                        ->get();
        
        return view('annonces',['data'=>$data,'annonce_display'=>$annonce_display]);
    }

    public function depot($id){
        $data = User::findOrFail($id);
        return view('depotAnnonce',['data'=>$data,]);
    }

    public function mesannonces($id){
        $data = User::findOrFail($id);
        $annonce_display = DB::table('annonces')
                        ->where('id_user','=',$data->id)
                        ->where('status','=','oui')
                        ->latest()
                        ->get();

        return view('MesAnnonces',['data'=>$data,'annonce_display'=>$annonce_display]);
    }
    public function details(){
        return view('Product_details');
    }

    /*public function index($id){
        $data = User::findOrFail($id);
        return view('annonces',[
            'user'=>$data,]);
    }*/

    public function profile($id){
        $data =array();
        if(Session::has('loginID')){
            $data = User::findOrFail($id);
        }/*else{
            $data = [
                'email' => 'john@example.com',
                'nom' => 'John Doe',
                'tel' => '0555555555'
            ];
        }*/
        return view('annonces',['data' => $data]);
    }

    public function update_profile(Request $request,$id){
        $request->validate([

        ]);
        //$data = User::findOrFail($id);
        /*$data =array();
        if(Session::has('loginID')){
            $data = User::where('id','=',Session::get('loginID'))->first();
        }*/
        
        $data = User::findOrFail($id);

        $data->email = $request->email;
        $data->nom = $request->nom;
        $data->tel = $request->tel;
        

        
            if($request->hasfile('photo')){
                $photo = $request->file('photo');
                $extension = $photo->getClientOriginalExtension();
                $nomPhoto = $data->nom.'_'.time().'.'.$extension;
                $photo->move('images/users/',$nomPhoto);
                $data->photo = $nomPhoto;
            }
            $result=$data->save();
            if($result){
                //return view('profile', ['data' => $data])->with('status','Modification réussi !');
                return redirect()->route('profile', ['data' => $data])->with('status','Modification réussi !');
            }else{
                return back()->with('fail','Something wrong');
            }
            
            //return back()->with('status','Modification réussi !');
            //return redirect()->route('profile')->with('status','Modification réussi !');
}
public function chercher(Request $request,$id){

    $request->validate([
        //'Categorie' => 'required',
        //'prix' => 'required',
        //'ville' => 'required'    
    ]);
    //$categorie = null;
    //$ville = null;
    //$prix_jour = null;
    

    /*foreach($request->input('categorie') as $cat){
        $categorie = $cat;
    }*/
    
    /*foreach($request->input('prix') as $prx){
        $prix_jour = $prx;
    }*/
    //$tab = explode(" ",$prix_jour);
    /*$prix_min = $tab[0];
    $prix_max = $tab[1];*/

    /*foreach($request->input('ville') as $vil){
        $ville = $vil;
    }*/
    $data = User::findOrFail($id);
    /*$annonce_recherche = DB::table('annonces')
    ->orwhere('ville', '=', $request->input('ville'))
    ->orwhere('prix', '=', $request->input('prix'))
    ->where('status','=','oui')
    ->get();*/

    $prix = $request->input('prix') ? $request->input('prix')[0] : null;
    $ville = $request->input('ville') ? $request->input('ville')[0] : null;

    $query = DB::table('annonces')
    ->where('status', '=', 'oui');
    if ($prix) {
        $query->where('prix', '=',$request->input('prix'));
    }
    if ($ville) {
        $query->where('ville', '=', $request->input('ville'));
    }

    $annonce_display = $query->get();


            
    return view('annonces', [
        'data' => $data,
        'annonce_display' => $annonce_display ?? null
    ]);            
}


}
