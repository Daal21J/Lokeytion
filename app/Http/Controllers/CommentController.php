<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

use App\Models\Annonce;
use App\Models\CommentAnnonce;

class CommentController extends Controller
{
    public function showComment()
    {
        return view('comment');
    }

    public function addComment(Request $request)
{
    $validatedData = $request->validate([
        'rating' => 'required',
        'comment' => 'required',
        'role' => 'required',
    ]);

    $id_annonce = 3;// get the ID of the announcement being commented on
    $id_commenter = 2;// get the ID of the commenter

    // check if a comment from the same commenter for the same announcement already exists
    $existing_comment = CommentAnnonce::where('id_annonce', $id_annonce)
        ->where('id_commenter', $id_commenter)
        ->first();

    if ($existing_comment) {
        // update the existing comment
        $existing_comment->comment = $validatedData['comment'];
        if ($validatedData['role'] != 'proprietaire') {
            $existing_comment->note = $validatedData['rating'];
        }
        $existing_comment->role = $validatedData['role'];
        $existing_comment->save();
    } else {
        // create a new comment
        $note = ($validatedData['role'] != 'proprietaire') ? $validatedData['rating'] : null;
        CommentAnnonce::create([
            'id_annonce' => $id_annonce,
            'id_commenter' => $id_commenter,
            'note' => $note,
            'comment' => $validatedData['comment'],
            'role' => $validatedData['role'],
        ]);
    }

    return redirect('/MesAnnonces')->with('success', 'Commentaire créé avec succès !');
}


    /*
    public function showMessage()
    {
        $notifications = Notification::where('msg', 'Votre demande a Expirée')
            ->where('id_user', '=', '1')
            ->first();

        if ($notifications) {
            return view('navbar', ['notifications' => $notifications]);
        } else {
            return view('navbar');
        }

    }
    */


}
