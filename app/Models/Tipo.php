<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipo
 *
 * @property $created_at
 * @property $updated_at
 * @property $Nombre
 * @property $id
 *
 * @property Analisi[] $analises
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipo extends Model
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
    public function analises()
    {
        return $this->hasMany('App\Models\Analisi', 'TipoID', 'id');
    }
    

}
