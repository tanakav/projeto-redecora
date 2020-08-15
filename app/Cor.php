<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    //
    protected $table = 'cores';
    public $timestamps = false;

    public function produtos()
    {
        return $this->hasMany(Produto::class); //duvida
    }
}
