<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Indicadorhclinico
 *
 * @property $created_at
 * @property $updated_at
 * @property $Nombre
 * @property $Valor
 * @property $id
 * @property $Historial_clinicoID
 * @property $Tipo_indID
 *
 * @property HistorialClinico $historialClinico
 * @property TipoInd $tipoInd
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Indicadorhclinico extends Model
{
    
    static $rules = [
		'Historial_clinicoID' => 'required',
		'Tipo_indID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Valor','Historial_clinicoID','Tipo_indID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historialClinico()
    {
        return $this->hasOne('App\Models\HistorialClinico', 'id', 'Historial_clinicoID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoInd()
    {
        return $this->hasOne('App\Models\TipoInd', 'id', 'Tipo_indID');
    }
    

}
