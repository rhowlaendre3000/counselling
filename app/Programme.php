<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    //

    public function course(){
        return $this->hasMany(Course::class);
        }

    public function user(){
        return $this->hasMany(User::class);
    }

    public function material(){
        return $this->hasMany(Material::class);
    }
}
