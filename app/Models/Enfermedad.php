<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    use HasFactory;

    protected $table = 'dim_enfermedad';

    protected $primaryKey = 'keyEnfermedad';

    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Fecha',
        'Suceptibles',
        'Casos',
        'Muertos',
        'Especie',
        'Region',
        'idEnfermedad'
    ];
}
