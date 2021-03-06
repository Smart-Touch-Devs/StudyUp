<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $fillable = [
        'pays','icone',
    ];
    public function scopeIdDescending($query){
        return $query->orderBy('created_at','desc');
    }
}
