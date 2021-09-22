<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'imagem', 'quantidade', 'unidade', 'preco', 'meses', 'marketer_id', 'product_id'
    ];

    public function marketers()
    {
        return $this->belongsToMany(Marketer::class, 'marketer_product');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
}
