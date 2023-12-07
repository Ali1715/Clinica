<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recetum
 *
 * @property $Indicaciones
 * @property $RecetaID
 * @property $Historial_clinicoID
 * @property $MedicamentoID
 *
 * @property HistorialClinico $historialClinico
 * @property Medicamento $medicamento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recetum extends Model
{
    
    static $rules = [
		'RecetaID' => 'required',
		'Historial_clinicoID' => 'required',
		'MedicamentoID' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Indicaciones','RecetaID','Historial_clinicoID','MedicamentoID'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function historialClinico()
    {
        return $this->hasOne('App\Models\HistorialClinico', 'Historial_clinicoID', 'Historial_clinicoID');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medicamento()
    {
        return $this->hasOne('App\Models\Medicamento', 'MedicamentoID', 'MedicamentoID');
    }
    

}
