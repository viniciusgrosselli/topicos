<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = ['nome', 'uf'];

    public function estado(){
        return $this->hasMany('App\Estado');
    }
}
