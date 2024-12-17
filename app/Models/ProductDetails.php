<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;
    protected $table = 'productdetails';
    protected $primaryKey = 'DetailID';
    protected $fillable = ['ProductID', 'ImageURL'];

    // Produkta relācija
    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }
}
