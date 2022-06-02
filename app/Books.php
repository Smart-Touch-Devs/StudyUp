<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Authors;
use App\Languages;


class Books extends Model
{
    protected $fillable = [
        'titre','categorie_id','editeur_id','langue_id','description','page','auteur_id','pays_id','prix','photo','document'
    ];
    public function scopeIdDescending($query){
        return $query->orderBy('created_at','desc');
    }
    public function author(){
        return $this->belongsTo(Authors::class,'auteur_id');
    }
    public function langues(){
        return $this->belongsTo(Languages::class, 'langue_id');
    }
    public function category(){
        return $this->belongsTo(Categories::class,'categorie_id');
    }
    public function editor(){
        return $this->belongsTo(Editors::class,'editeur_id');
    }
    public function countrie(){
        return $this->belongsTo(Countries::class,'pays_id');
    }

}
