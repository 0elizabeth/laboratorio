<?php

namespace App\Models;

use App\Models\Examene;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisi extends Model
{
    use HasFactory;
    public function examene(){
        return $this->belongsTo(Examene::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
