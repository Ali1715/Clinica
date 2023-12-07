<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicamento
 *
 * @property $created_at
 * @property $updated_at
 * @property $Descripcion
 * @property $Nombre
 * @property $id
 *
 * @property Receta[] $recetas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medicamento extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','Nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recetas()
    {
        return $this->hasMany('App\Models\Receta', 'MedicamentoID', 'id');
    }
    

}
