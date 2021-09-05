<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rents extends Model
{
    use HasFactory;

    public function carro() {

        //return $this->belongsTo(Cars::class, 'fk_car', 'id');

        return $this->hasOne(Cars::class, 'id', 'fk_car');

    }

    public function usuario() {

        return $this->hasOne(User::class, 'id', 'fk_user');

    }


}
