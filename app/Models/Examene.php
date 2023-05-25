<?php

namespace App\Models;

use App\Models\Analisi;
use App\Models\Paciente;
use App\Models\Solicitude;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examene extends Model
{
    use HasFactory;
    public function analisis(){
        return $this->hasMany(Analisi::class);
    }
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
    public function solicitud(){
        return $this->belongsTo(Solicitude::class);
    }
}
