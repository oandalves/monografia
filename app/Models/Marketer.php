<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketer extends Model
{
    use HasFactory;

    protected $fillable = [
        'telefone', 'sexo', 'local', 'cidade', 'uf', 'manejo', 'certificacao', 'selo', 'user_id', 'fair_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fair()
    {
        return $this->belongsTo(Fair::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'marketer_product');
    }
}
