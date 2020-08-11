<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    protected $table = 'cores';

    public function produtos()
    {
        return $this->belongsToMany(Produto::class); //duvida
    }
}
