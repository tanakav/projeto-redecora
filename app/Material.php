<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //

    public function produtos()
    {
        return $this->belongsToMany(Produto::class);
    }
}
