<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $created_at
 * @property $updated_at
 * @property $Fecha_hora
 * @property $Nombre
 * @property $Total
 * @property $id
 * @property $PacienteID
 *
 * @property Factura[] $facturas
 * @property Paciente $paciente
 * @property ServAnalisi[] $servAnalises
 * @property SolicitaServicio[] $solicitaServicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    static $rules = [
		'PacienteID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Fecha_hora','Nombre','Total','PacienteID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'ServicioID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'PacienteID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servAnalises()
    {
        return $this->hasMany('App\Models\ServAnalisi', 'ServicioID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solicitaServicios()
    {
        return $this->hasMany('App\Models\SolicitaServicio', 'ServicioID', 'id');
    }
    

}
