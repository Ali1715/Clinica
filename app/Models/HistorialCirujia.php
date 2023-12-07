<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialCirujia
 *
 * @property $created_at
 * @property $updated_at
 * @property $Fecha_hora
 * @property $id
 *
 * @property Donante[] $donantes
 * @property Historial $historial
 * @property HistorialCirujiaRgistro[] $historialCirujiaRgistros
 * @property Indicadoreshcirujia[] $indicadoreshcirujias
 * @property Transplante[] $transplantes
 * @property Tratamientoshcir[] $tratamientoshcirs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistorialCirujia extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Fecha_hora'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function donantes()
    {
        return $this->hasMany('App\Models\Donante', 'Historial_cirujiaID', 'id');
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
    public function historialCirujiaRgistros()
    {
        return $this->hasMany('App\Models\HistorialCirujiaRgistro', 'Historial_cirujiaID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function indicadoreshcirujias()
    {
        return $this->hasMany('App\Models\Indicadoreshcirujia', 'Historial_cirujiaID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transplantes()
    {
        return $this->hasMany('App\Models\Transplante', 'Historial_cirujiaID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tratamientoshcirs()
    {
        return $this->hasMany('App\Models\Tratamientoshcir', 'Historial_cirujiaID', 'id');
    }
    

}
