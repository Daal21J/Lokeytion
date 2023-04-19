<?php

namespace App\Http\Controllers;

//use App\Http\Requests\AnnonceFormRequest;
use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Objet;
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

    public function edit($id)
    {
        $annonce = DB::table('annonces')
            ->join('objets', 'annonces.id_objet', '=', 'objets.id')
            ->where('annonces.id', $id)
            ->select('annonces.*', 'objets.categorie', 'objets.discription', 'objets.image1', 'objets.image2', 'objets.image3')
            ->first();

        $joursDispo = explode(',', $annonce->joursDispo);
        return view('editAnnonce', ['annonce' => $annonce, 'joursDispo' => $joursDispo]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
            'discription' => 'required',
            'prix' => 'required|numeric',
            'categorie' => 'required',
            'ville' => 'required',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date|after_or_equal:dateDebut',
            'image' => 'required|array|min:1|max:3',
            'image.*' => 'required|image',
            'joursDispo' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (count($value) < 1) {
                        $fail('Au moins un jour doit être sélectionné.');
                    }
                },
            ],
        ]);

        $jours = $validatedData['joursDispo'];
        $jours_str = implode(',', $jours);

        // Récupérez les fichiers téléchargés
        $files = $request->file('image');

        // Vérifiez si l'objet existe déjà
        $objet = Objet::where('nom', $validatedData['titre'])->first();

        /*
      $objet = Objet::where('nom', $validatedData['titre'])
              ->where('categorie', $validatedData['categorie'])
              ->where('discription', $validatedData['discription'])
              ->where('image1', $validatedData['image'][0])
              ->where('image2', $validatedData['image'][1])
              ->where('image3', $validatedData['image'][2])
              ->first();

*/

        if (!$objet) {
            // Si l'objet n'existe pas, créez-le
            $objet = new Objet;
            $objet->id_user = 2;
            $objet->nom = $validatedData['titre'];
            $objet->categorie = $validatedData['categorie'];
            $objet->discription = $validatedData['discription'];

            // Enregistrez chaque fichier dans la base de données
            $files = $request->file('image');
            foreach ($files as $key => $file) {
                $filename = $key + 1;
                $objet->setAttribute("image{$filename}", $file->store('images'));
            }

            $objet->save();
        }


        $annonce = new Annonce;
        $annonce->id_objet = $objet->id;
        $annonce->id_user = 2;
        $annonce->titre = $validatedData['titre'];
        $annonce->prix = $validatedData['prix'];
        $annonce->ville = $validatedData['ville'];
        $annonce->de = $validatedData['dateDebut'];
        $annonce->a = $validatedData['dateFin'];
        $annonce->joursDispo =  $jours_str;
        $annonce->status = 'active';
        $annonce->save();


        return redirect('/MesAnnonces')->with('success', 'Annonce créée avec succès !');
    }


    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'titre' => 'required|string|max:255',
            'discription' => 'required|string',
            'prix' => 'required|numeric',
            'ville' => 'required|string|max:255',
            'joursDispo' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (count($value) < 1) {
                        $fail('Au moins un jour doit être sélectionné.');
                    }
                },
            ],
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date|after_or_equal:dateDebut',
            'image1' => 'nullable|image|max:2048',
            'image2' => 'nullable|image|max:2048',
            'image3' => 'nullable|image|max:2048',
        ]);

        // Récupérer l'annonce à modifier
        $annonce = Annonce::findOrFail($id);
        $objet = Objet::findOrFail($annonce->id_objet);

        // Mettre à jour les propriétés de l'annonce avec les valeurs du formulaire
        $annonce->titre = $request->input('titre');
        $objet->discription = $request->input('discription');
        $annonce->prix = $request->input('prix');
        $annonce->ville = $request->input('ville');
        $annonce->joursDispo = implode(',', $request->input('joursDispo'));
        $annonce->de = $request->input('dateDebut');
        $annonce->a = $request->input('dateFin');

        // Gérer les images
        if ($request->hasFile('image1')) {
            $imagePath = $request->file('image1')->store('public/images');
            $objet->image1 = str_replace('public/', '', $imagePath);
        }
        if ($request->hasFile('image2')) {
            $imagePath = $request->file('image2')->store('public/images');
            $objet->image2 = str_replace('public/', '', $imagePath);
        }
        if ($request->hasFile('image3')) {
            $imagePath = $request->file('image3')->store('public/images');
            $objet->image3 = str_replace('public/', '', $imagePath);
        }

        // Enregistrer les modifications dans la base de données
        $annonce->save();
        $objet->save();
        // Rediriger l'utilisateur vers la page d'accueil avec un message de confirmation
        return redirect('/editAnnonces/{id}')->with('success', 'L\'annonce a été modifiée avec succès.');
    }



    public function mesannonces()
    {
        // Récupérer les annonces de l'utilisateur avec id=2, avec leurs objets correspondants
        $annonces = Annonce::with('objet')->where('id_user', 2)->get();

        // Renvoyer la vue mes_annonces avec les données récupérées
        return view('MesAnnonces', ['annonces' => $annonces]);


        // Récupérer toutes les annonces à partir du modèle Annonce
        //  $annonces = Annonce::all();
        // Récupérer les annonces du user avec id=2
        // $annonces = Annonce::where('id_user', 2)->get();
        // Renvoyer la vue mes_annonces avec les données récupérées
        //  return view('MesAnnonces', ['annonces' => $annonces]);
        //  return view('MesAnnonces');
    }
    public function details()
    {
        return view('Product_details');
    }
}
