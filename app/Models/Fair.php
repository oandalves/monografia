<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fair extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'descricao', 'dia', 'horario', 'periodicidade',
        'latitude', 'longitude', 'local', 'cidade', 'uf', 'telefone',
        'email', 'link', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
