<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //

    public $timestamps = false;

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
