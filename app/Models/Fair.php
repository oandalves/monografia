<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fair extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',  'descricao', 'dia', 'horario', 'periodicidade',
        'latitude', 'longitude', 'address', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
