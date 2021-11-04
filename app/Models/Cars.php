<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    public function brands() {

        return $this->hasMany(\App\Models\brands::class, 'id', 'fk_brand');

    }

}
