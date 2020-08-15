<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    protected $table = 'cores';

    public function produtos()
    {
        return $this->hasMany(Produto::class); //duvida
    }
}
