<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $created_at
 * @property $updated_at
 * @property $Ci
 * @property $Descuento
 * @property $Fecha_hora
 * @property $Nit
 * @property $Nombre
 * @property $Total
 * @property $id
 * @property $ServicioID
 *
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		'ServicioID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Ci','Descuento','Fecha_hora','Nit','Nombre','Total','ServicioID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'ServicioID');
    }
    

}
