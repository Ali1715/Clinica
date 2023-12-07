<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EquipoCirujium
 *
 * @property $EquipoID
 * @property $UsuarioID
 *
 * @property Equipo $equipo
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EquipoCirujium extends Model
{
    
    static $rules = [
		'EquipoID' => 'required',
		'UsuarioID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['EquipoID','UsuarioID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'EquipoID', 'EquipoID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'UsuarioID');
    }
    

}
