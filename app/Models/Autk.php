<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autk extends Model
{
    use HasFactory;

    protected $table = 'autk';

    protected $fillable = [
        'celular',
        'telefono',
        'email',
        'direccion',
        'facebook',
        'instagram',
        'twitter',
        'whatsapp',
    ];
}
