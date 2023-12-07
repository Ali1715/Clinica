<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $created_at
 * @property $updated_at
 * @property $Descripcion
 * @property $Tipo
 * @property $id
 *
 * @property Cirujia[] $cirujias
 * @property EquipoCirujia[] $equipoCirujias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','Tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cirujias()
    {
        return $this->hasMany('App\Models\Cirujia', 'EquipoID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipoCirujias()
    {
        return $this->hasMany('App\Models\EquipoCirujia', 'EquipoID', 'id');
    }
    

}
