<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fair extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'imagem', 'descricao', 'dia', 'horario', 'periodicidade',
        'latitude', 'longitude', 'address', 'cidade', 'uf', 'telefone',
        'email', 'link',  'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
