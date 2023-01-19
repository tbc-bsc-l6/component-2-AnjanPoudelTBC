<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function cart()
    // {
    //     return $this->hasOne(Cart::class);
    // }



    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where('product_name', 'like', '%' . $search . '%')
        );

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>

            $query
                ->whereIn('category_id', $category)
        );

        $query->when(
            $filters['price_order'] ?? false,
            fn ($query, $price) =>
            $query->orderBy('price', $price)
        );
        $query->when(
            $filters['name_order'] ?? false,
            fn ($query, $name) =>
            $query->orderBy('product_name', $name)
        );
    }
}
