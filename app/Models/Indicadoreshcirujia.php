<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Indicadoreshcirujia
 *
 * @property $created_at
 * @property $updated_at
 * @property $Nombre
 * @property $Valor
 * @property $id
 * @property $Historial_cirujiaID
 * @property $Tipo_indID
 *
 * @property HistorialCirujia $historialCirujia
 * @property TipoInd $tipoInd
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Indicadoreshcirujia extends Model
{
    
    static $rules = [
		'Historial_cirujiaID' => 'required',
		'Tipo_indID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Valor','Historial_cirujiaID','Tipo_indID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historialCirujia()
    {
        return $this->hasOne('App\Models\HistorialCirujia', 'id', 'Historial_cirujiaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoInd()
    {
        return $this->hasOne('App\Models\TipoInd', 'id', 'Tipo_indID');
    }
    

}
