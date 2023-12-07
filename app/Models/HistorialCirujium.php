<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialCirujium
 *
 * @property $Fecha_hora
 * @property $Historial_cirujiaID
 *
 * @property Donante[] $donantes
 * @property Historial $historial
 * @property HistorialCirujiaRgistro[] $historialCirujiaRgistros
 * @property Indicadoreshcirujium[] $indicadoreshcirujias
 * @property Transplante[] $transplantes
 * @property Tratamientoshcir[] $tratamientoshcirs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistorialCirujium extends Model
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
    protected $fillable = ['Fecha_hora','Historial_cirujiaID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function donantes()
    {
        return $this->hasMany('App\Models\Donante', 'Historial_cirujiaID', 'Historial_cirujiaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historial()
    {
        return $this->hasOne('App\Models\Historial', 'HistorialID', 'Historial_cirujiaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialCirujiaRgistros()
    {
        return $this->hasMany('App\Models\HistorialCirujiaRgistro', 'Historial_cirujiaID', 'Historial_cirujiaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function indicadoreshcirujias()
    {
        return $this->hasMany('App\Models\Indicadoreshcirujium', 'Historial_cirujiaID', 'Historial_cirujiaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transplantes()
    {
        return $this->hasMany('App\Models\Transplante', 'Historial_cirujiaID', 'Historial_cirujiaID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tratamientoshcirs()
    {
        return $this->hasMany('App\Models\Tratamientoshcir', 'Historial_cirujiaID', 'Historial_cirujiaID');
    }
    

}
