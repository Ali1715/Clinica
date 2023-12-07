<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resultado
 *
 * @property $created_at
 * @property $updated_at
 * @property $Fecha_hora
 * @property $Resultado
 * @property $id
 * @property $Serv_analisisID
 *
 * @property ServAnalisi $servAnalisi
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Resultado extends Model
{
    
    static $rules = [
		'Serv_analisisID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Fecha_hora','Resultado','Serv_analisisID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servAnalisi()
    {
        return $this->hasOne('App\Models\ServAnalisi', 'id', 'Serv_analisisID');
    }
    

}
