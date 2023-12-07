<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Doctor
 *
 * @property $created_at
 * @property $updated_at
 * @property $fecha_titulo
 * @property $EspecialidadID
 * @property $id
 *
 * @property Especialidad $especialidad
 * @property Turno[] $turnos
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Doctor extends Model
{
    
    static $rules = [
		'EspecialidadID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_titulo','EspecialidadID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function especialidad()
    {
        return $this->hasOne('App\Models\Especialidad', 'id', 'EspecialidadID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function turnos()
    {
        return $this->hasMany('App\Models\Turno', 'DoctorID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id');
    }
    

}
