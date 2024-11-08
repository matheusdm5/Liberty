<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_consulta', 
        'hora_consulta', 
        'status', 
        'medico_id', 
        'paciente_id'
    ];

    // Relacionamento com Médico
    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }

    // Relacionamento com Paciente
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
