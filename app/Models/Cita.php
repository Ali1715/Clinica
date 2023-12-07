<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cita
 *
 * @property $created_at
 * @property $updated_at
 * @property $Fechahora
 * @property $id
 * @property $PacienteID
 * @property $PersonalID
 * @property $TurnoID
 * @property $EspecialidadID
 *
 * @property Consulta[] $consultas
 * @property Especialidad $especialidad
 * @property Paciente $paciente
 * @property Personal $personal
 * @property SolicitaServicio[] $solicitaServicios
 * @property Turno $turno
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{
    
    static $rules = [
		'PacienteID' => 'required',
		'PersonalID' => 'required',
		'TurnoID' => 'required',
		'EspecialidadID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Fechahora','PacienteID','PersonalID','TurnoID','EspecialidadID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultas()
    {
        return $this->hasMany('App\Models\Consulta', 'CitaID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function especialidad()
    {
        return $this->hasOne('App\Models\Especialidad', 'id', 'EspecialidadID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'PacienteID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personal()
    {
        return $this->hasOne('App\Models\Personal', 'id', 'PersonalID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solicitaServicios()
    {
        return $this->hasMany('App\Models\SolicitaServicio', 'CitaID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function turno()
    {
        return $this->hasOne('App\Models\Turno', 'id', 'TurnoID');
    }
    

}
