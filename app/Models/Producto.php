<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = "productos";

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'inventario',
        'imagen',
        'categoria_id'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
