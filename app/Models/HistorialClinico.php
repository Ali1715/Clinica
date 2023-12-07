<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialClinico
 *
 * @property $created_at
 * @property $updated_at
 * @property $Enf_actual
 * @property $Fecha_hora
 * @property $Hip_diagnostico
 * @property $id
 * @property $ConsultaID
 *
 * @property Consulta $consulta
 * @property Historial $historial
 * @property Indicadorhclinico[] $indicadorhclinicos
 * @property Receta[] $recetas
 * @property Tratamientoshcli[] $tratamientoshclis
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistorialClinico extends Model
{
    
    static $rules = [
		'ConsultaID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Enf_actual','Fecha_hora','Hip_diagnostico','ConsultaID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function consulta()
    {
        return $this->hasOne('App\Models\Consulta', 'id', 'ConsultaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historial()
    {
        return $this->hasOne('App\Models\Historial', 'id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function indicadorhclinicos()
    {
        return $this->hasMany('App\Models\Indicadorhclinico', 'Historial_clinicoID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recetas()
    {
        return $this->hasMany('App\Models\Receta', 'Historial_clinicoID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tratamientoshclis()
    {
        return $this->hasMany('App\Models\Tratamientoshcli', 'Historial_clinicoID', 'id');
    }
    

}
