<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'categorie', 'icone',
    ];
    public function scopeIdDescending($query){
        return $query->orderBy('created_at','desc');
    }
}
