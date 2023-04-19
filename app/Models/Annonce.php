<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $table = 'annonces';
    protected $fillable = ['id_objet','id_user','titre','prix','ville','status','joursDispo', 'de', 'a'];

    public function objet()
    {
        return $this->belongsTo(Objet::class, 'id_objet');
    }

    public function comments()
    {
        return $this->hasMany(CommentAnnonce::class, 'id_annonce');
    }


    /*
    public function objet()
    {
        return $this->belongsTo(Objet::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function joursDispos()
    {
        return $this->hasMany(JourDispo::class);
    }

    */
}
