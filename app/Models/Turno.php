<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Turno
 *
 * @property $created_at
 * @property $updated_at
 * @property $Hora_fin
 * @property $Hora_inicio
 * @property $id
 * @property $DoctorID
 *
 * @property Cita[] $citas
 * @property Doctor $doctor
 * @property TurnoHorario[] $turnoHorarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Turno extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Hora_fin','Hora_inicio','DoctorID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Cita', 'TurnoID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor', 'id', 'DoctorID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function turnoHorarios()
    {
        return $this->hasMany('App\Models\TurnoHorario', 'TurnoID', 'id');
    }
    

}
