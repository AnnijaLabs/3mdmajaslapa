<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'ProductID';
    protected $fillable = ['CategoryID', 'Name', 'Price', 'Quantity', 'Description'];

    // Kategorijas relācija
    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryID');
    }

    // Produkta detaļas relācija
    public function details()
    {
        return $this->hasOne(ProductDetails::class, 'ProductID');
    }
}
