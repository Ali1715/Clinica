<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ServAnalisi
 *
 * @property $created_at
 * @property $updated_at
 * @property $id
 * @property $ServicioID
 * @property $AnalisisID
 *
 * @property Analisi $analisi
 * @property Resultado[] $resultados
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ServAnalisi extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ServicioID','AnalisisID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function analisi()
    {
        return $this->hasOne('App\Models\Analisi', 'id', 'AnalisisID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resultados()
    {
        return $this->hasMany('App\Models\Resultado', 'Serv_analisisID', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'id', 'ServicioID');
    }
    

}
