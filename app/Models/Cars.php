<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    public function Models() {

        return $this->hasMany(\App\Models\Models::class, 'id', 'fk_model');

    }
   
}
