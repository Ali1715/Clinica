<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Administrativo extends Model
{
    use HasFactory;
    protected $primaryKey = 'usuario_id'; // Indica que 'usuario_id' es la clave primaria de este modelo
    public $incrementing = false; // Indica que 'usuario_id' no se incrementa automáticamente

    protected $fillable = ['usuario_id', 'cargo']; // Especifica los atributos que se pueden llenar de forma masiva

    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id'); // User es el modelo predeterminado de usuario en Laravel
    }
}
