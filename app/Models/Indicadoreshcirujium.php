<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Indicadoreshcirujium
 *
 * @property $Nombre
 * @property $Valor
 * @property $IndicadoreshcirujiaID
 * @property $Historial_cirujiaID
 * @property $Tipo_indID
 *
 * @property HistorialCirujium $historialCirujium
 * @property TipoInd $tipoInd
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Indicadoreshcirujium extends Model
{
    
    static $rules = [
		'IndicadoreshcirujiaID' => 'required',
		'Historial_cirujiaID' => 'required',
		'Tipo_indID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Valor','IndicadoreshcirujiaID','Historial_cirujiaID','Tipo_indID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historialCirujium()
    {
        return $this->hasOne('App\Models\HistorialCirujium', 'Historial_cirujiaID', 'Historial_cirujiaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoInd()
    {
        return $this->hasOne('App\Models\TipoInd', 'Tipo_indID', 'Tipo_indID');
    }
    

}
