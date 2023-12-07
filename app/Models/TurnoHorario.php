<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TurnoHorario
 *
 * @property $created_at
 * @property $updated_at
 * @property $Estado
 * @property $Fecha_hora
 * @property $id
 * @property $TurnoID
 *
 * @property Turno $turno
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TurnoHorario extends Model
{
    
    static $rules = [
		'TurnoID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Estado','Fecha_hora','TurnoID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function turno()
    {
        return $this->hasOne('App\Models\Turno', 'id', 'TurnoID');
    }
    

}
