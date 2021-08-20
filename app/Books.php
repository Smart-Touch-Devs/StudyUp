<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = [
        'titre','categorie_id','editeur_id','langue_id','description','page','auteur_id','pays_id','prix','photo','document'
    ];
}