<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Analisi
 *
 * @property $Descripcion
 * @property $Nombre
 * @property $Precio
 * @property $id
 * @property $TipoID
 * @property $created_at
 * @property $updated_at
 *
 * @property ServAnalisi[] $servAnalises
 * @property Tipo $tipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Analisi extends Model
{
    
    static $rules = [
		'TipoID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','Nombre','Precio','TipoID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servAnalises()
    {
        return $this->hasMany('App\Models\ServAnalisi', 'AnalisisID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipo()
    {
        return $this->hasOne('App\Models\Tipo', 'id', 'TipoID');
    }
    

}
