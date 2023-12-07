<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tratamientoshcli
 *
 * @property $created_at
 * @property $updated_at
 * @property $Descripcion
 * @property $Nombre
 * @property $id
 * @property $Historial_clinicoID
 *
 * @property HistorialClinico $historialClinico
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tratamientoshcli extends Model
{
    
    static $rules = [
		'Historial_clinicoID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','Nombre','Historial_clinicoID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historialClinico()
    {
        return $this->hasOne('App\Models\HistorialClinico', 'id', 'Historial_clinicoID');
    }
    

}
