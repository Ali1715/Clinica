<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Citum
 *
 * @property $Fechahora
 * @property $CitaID
 * @property $PacienteID
 * @property $PersonalID
 * @property $TurnoID
 * @property $EspecialidadID
 *
 * @property Consultum[] $consultas
 * @property Especialidad $especialidad
 * @property Paciente $paciente
 * @property Personal $personal
 * @property SolicitaServicio[] $solicitaServicios
 * @property Turno $turno
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Citum extends Model
{
    
    static $rules = [
		'CitaID' => 'required',
		'PacienteID' => 'required',
		'PersonalID' => 'required',
		'TurnoID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Fechahora','CitaID','PacienteID','PersonalID','TurnoID','EspecialidadID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultas()
    {
        return $this->hasMany('App\Models\Consultum', 'CitaID', 'CitaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function especialidad()
    {
        return $this->hasOne('App\Models\Especialidad', 'EspecialidadID', 'EspecialidadID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'PacienteID', 'PacienteID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personal()
    {
        return $this->hasOne('App\Models\Personal', 'PersonalID', 'PersonalID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solicitaServicios()
    {
        return $this->hasMany('App\Models\SolicitaServicio', 'CitaID', 'CitaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function turno()
    {
        return $this->hasOne('App\Models\Turno', 'TurnoID', 'TurnoID');
    }
    

}
