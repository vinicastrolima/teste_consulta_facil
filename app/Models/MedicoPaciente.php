<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicoPaciente extends Model
{
    protected $fillable = ['medico_id', 'paciente_id'];
}