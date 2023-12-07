<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Receta
 *
 * @property $created_at
 * @property $updated_at
 * @property $Indicaciones
 * @property $id
 * @property $Historial_clinicoID
 * @property $MedicamentoID
 *
 * @property HistorialClinico $historialClinico
 * @property Medicamento $medicamento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Receta extends Model
{
    
    static $rules = [
		'Historial_clinicoID' => 'required',
		'MedicamentoID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Indicaciones','Historial_clinicoID','MedicamentoID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historialClinico()
    {
        return $this->hasOne('App\Models\HistorialClinico', 'id', 'Historial_clinicoID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medicamento()
    {
        return $this->hasOne('App\Models\Medicamento', 'id', 'MedicamentoID');
    }
    

}
