<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tratamientoshcir
 *
 * @property $created_at
 * @property $updated_at
 * @property $Descripcion
 * @property $Nombre
 * @property $id
 * @property $Historial_cirujiaID
 *
 * @property HistorialCirujia $historialCirujia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tratamientoshcir extends Model
{
    
    static $rules = [
		'Historial_cirujiaID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','Nombre','Historial_cirujiaID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historialCirujia()
    {
        return $this->hasOne('App\Models\HistorialCirujia', 'id', 'Historial_cirujiaID');
    }
    

}
