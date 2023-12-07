<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Historial
 *
 * @property $created_at
 * @property $updated_at
 * @property $Altura
 * @property $Ant_familiar
 * @property $Ant_personal
 * @property $Grupo_sanguineo
 * @property $Raza
 * @property $Sexo
 * @property $id
 * @property $PacienteID
 *
 * @property HistorialCirujia $historialCirujia
 * @property HistorialClinico $historialClinico
 * @property Paciente $paciente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Historial extends Model
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
    protected $fillable = ['Altura','Ant_familiar','Ant_personal','Grupo_sanguineo','Raza','Sexo','PacienteID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historialCirujia()
    {
        return $this->hasOne('App\Models\HistorialCirujia', 'id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historialClinico()
    {
        return $this->hasOne('App\Models\HistorialClinico', 'id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paciente()
    {
        return $this->hasOne('App\Models\Paciente', 'id', 'PacienteID');
    }
    

}
