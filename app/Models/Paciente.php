<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $created_at
 * @property $updated_at
 * @property $Ci
 * @property $Direccion
 * @property $Email
 * @property $Estado_civil
 * @property $Fecha_nacimiento
 * @property $Lugar_nacimiento
 * @property $Nacionalidad
 * @property $Nombre
 * @property $Profesion
 * @property $Telefono
 * @property $id
 *
 * @property Cirujia[] $cirujias
 * @property Cita[] $citas
 * @property Consulta[] $consultas
 * @property Historial[] $historials
 * @property Servicio[] $servicios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Ci','Direccion','Email','Estado_civil','Fecha_nacimiento','Lugar_nacimiento','Nacionalidad','Nombre','Profesion','Telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cirujias()
    {
        return $this->hasMany('App\Models\Cirujia', 'PacienteID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citas()
    {
        return $this->hasMany('App\Models\Cita', 'PacienteID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultas()
    {
        return $this->hasMany('App\Models\Consulta', 'PacienteID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historials()
    {
        return $this->hasMany('App\Models\Historial', 'PacienteID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio', 'PacienteID', 'id');
    }
    

}
