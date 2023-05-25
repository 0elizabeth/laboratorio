<?php

namespace App\Models;

use App\Models\Examene;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model
{
    use HasFactory;
    public function examenes(){
        return $this->hasMany(Examene::class);
    }
}
