<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cirujium
 *
 * @property $Fecha_hora
 * @property $Sala
 * @property $CirujiaID
 * @property $PacienteID
 * @property $EquipoID
 *
 * @property Equipo $equipo
 * @property HistorialCirujiaRgistro[] $historialCirujiaRgistros
 * @property Paciente $paciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cirujium extends Model
{
    
    static $rules = [
		'CirujiaID' => 'required',
		'PacienteID' => 'required',
		'EquipoID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Fecha_hora','Sala','CirujiaID','PacienteID','EquipoID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'EquipoID', 'EquipoID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialCirujiaRgistros()
    {
        return $this->hasMany('App\Models\HistorialCirujiaRgistro', 'CirujiaID', 'CirujiaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'PacienteID', 'PacienteID');
    }
    

}
