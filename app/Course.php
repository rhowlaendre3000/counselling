<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function programme(){
        return $this->belongsTo(Programme::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function material(){
       return $this->hasMany(Material::class);
    }
}
