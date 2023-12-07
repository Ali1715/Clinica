<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 *
 * @property $created_at
 * @property $updated_at
 * @property $Dia
 * @property $Hora_fin
 * @property $Hora_inicio
 * @property $Intervalos
 * @property $Turnos_disponibles
 * @property $id
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Horario extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Dia','Hora_fin','Hora_inicio','Intervalos','Turnos_disponibles'];



}
