<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialCirujiaRgistro
 *
 * @property $created_at
 * @property $updated_at
 * @property $Historial_cirujiaID
 * @property $CirujiaID
 *
 * @property Cirujia $cirujia
 * @property HistorialCirujia $historialCirujia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistorialCirujiaRgistro extends Model
{
    
    static $rules = [
		'Historial_cirujiaID' => 'required',
		'CirujiaID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Historial_cirujiaID','CirujiaID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cirujia()
    {
        return $this->hasOne('App\Models\Cirujia', 'id', 'CirujiaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historialCirujia()
    {
        return $this->hasOne('App\Models\HistorialCirujia', 'id', 'Historial_cirujiaID');
    }
    

}
