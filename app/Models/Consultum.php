<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consultum
 *
 * @property $Diagnostico
 * @property $Fechahora
 * @property $Instrucciones
 * @property $Motivo
 * @property $Observacion
 * @property $ConsultaID
 * @property $CitaID
 * @property $PacienteID
 * @property $DoctorID
 *
 * @property Citum $citum
 * @property HistorialClinico[] $historialClinicos
 * @property Paciente $paciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consultum extends Model
{
    
    static $rules = [
		'ConsultaID' => 'required',
		'CitaID' => 'required',
		'PacienteID' => 'required',
		'DoctorID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Diagnostico','Fechahora','Instrucciones','Motivo','Observacion','ConsultaID','CitaID','PacienteID','DoctorID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function citum()
    {
        return $this->hasOne('App\Models\Citum', 'CitaID', 'CitaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialClinicos()
    {
        return $this->hasMany('App\Models\HistorialClinico', 'ConsultaID', 'ConsultaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'PacienteID', 'PacienteID');
    }
    

}
