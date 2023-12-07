<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Donante
 *
 * @property $created_at
 * @property $updated_at
 * @property $Causa_obito
 * @property $Hla
 * @property $Lista_problemas
 * @property $Tipo
 * @property $id
 * @property $Historial_cirujiaID
 *
 * @property HistorialCirujia $historialCirujia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Donante extends Model
{
    
    static $rules = [
		'Historial_cirujiaID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Causa_obito','Hla','Lista_problemas','Tipo','Historial_cirujiaID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historialCirujia()
    {
        return $this->hasOne('App\Models\HistorialCirujia', 'id', 'Historial_cirujiaID');
    }
    

}
