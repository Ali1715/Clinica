<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transplante
 *
 * @property $created_at
 * @property $updated_at
 * @property $Nombre
 * @property $Valor
 * @property $id
 * @property $Historial_cirujiaID
 *
 * @property HistorialCirujia $historialCirujia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transplante extends Model
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
    protected $fillable = ['Nombre','Valor','Historial_cirujiaID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historialCirujia()
    {
        return $this->hasOne('App\Models\HistorialCirujia', 'id', 'Historial_cirujiaID');
    }
    

}
