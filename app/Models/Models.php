<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    use HasFactory;

    public function teste() {

        return $this->hasOne(\App\Models\brands::class, 'id', 'fk_brand');

    }


}
