<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'telefone', 'sexo', 'tipo', 'local', 'cidade', 'uf', 'manejo', 'certificacao', 'selo', 'status', 'fair_id'
    ];

    public function fair()
    {
        return $this->belongsTo(Fair::class);
    }

}
