<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machines extends Model
{
    public function jobs() {
        return $this->hasMany(Jobs::class);
    }
}
