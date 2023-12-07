<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consulta
 *
 * @property $created_at
 * @property $updated_at
 * @property $Diagnostico
 * @property $Fechahora
 * @property $Instrucciones
 * @property $Motivo
 * @property $Observacion
 * @property $id
 * @property $CitaID
 * @property $PacienteID
 * @property $DoctorID
 *
 * @property Cita $cita
 * @property HistorialClinico[] $historialClinicos
 * @property Paciente $paciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consulta extends Model
{
    
    static $rules = [
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
    protected $fillable = ['Diagnostico','Fechahora','Instrucciones','Motivo','Observacion','CitaID','PacienteID','DoctorID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cita()
    {
        return $this->hasOne('App\Models\Cita', 'id', 'CitaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialClinicos()
    {
        return $this->hasMany('App\Models\HistorialClinico', 'ConsultaID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'PacienteID');
    }
    

}
