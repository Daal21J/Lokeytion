<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jourdispo extends Model
{
    use HasFactory;

    protected $fillable1 = ['id_user', 'id_demande', 'msg', 'etat'];
    protected $fillable = ['id_annonce','jour','etat'];



}

