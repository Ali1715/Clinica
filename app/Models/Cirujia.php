<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cirujia
 *
 * @property $created_at
 * @property $updated_at
 * @property $Fecha_hora
 * @property $Sala
 * @property $id
 * @property $PacienteID
 * @property $EquipoID
 *
 * @property Equipo $equipo
 * @property HistorialCirujiaRgistro[] $historialCirujiaRgistros
 * @property Paciente $paciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cirujia extends Model
{
    
    static $rules = [
		'PacienteID' => 'required',
		'EquipoID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Fecha_hora','Sala','PacienteID','EquipoID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'EquipoID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialCirujiaRgistros()
    {
        return $this->hasMany('App\Models\HistorialCirujiaRgistro', 'CirujiaID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'PacienteID');
    }
    

}
