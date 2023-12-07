<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoInd
 *
 * @property $created_at
 * @property $updated_at
 * @property $Nombre
 * @property $id
 *
 * @property Indicadoreshcirujia[] $indicadoreshcirujias
 * @property Indicadorhclinico[] $indicadorhclinicos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoInd extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function indicadoreshcirujias()
    {
        return $this->hasMany('App\Models\Indicadoreshcirujia', 'Tipo_indID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function indicadorhclinicos()
    {
        return $this->hasMany('App\Models\Indicadorhclinico', 'Tipo_indID', 'id');
    }
    

}
