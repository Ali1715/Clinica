<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Especialidad
 *
 * @property $created_at
 * @property $updated_at
 * @property $Nombre
 * @property $id
 *
 * @property Cita[] $citas
 * @property Doctor[] $doctors
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Especialidad extends Model
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
    public function citas()
    {
        return $this->hasMany('App\Models\Cita', 'EspecialidadID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function doctors()
    {
        return $this->hasMany('App\Models\Doctor', 'EspecialidadID', 'id');
    }
    

}
