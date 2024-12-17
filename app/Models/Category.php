<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'CategoryID';
    protected $fillable = ['Name', 'CatImageURL']; // Pievienojiet visus laukus, kurus vēlaties aizpildīt


    // Relācija ar produktiem
    public function products()
    {
        return $this->hasMany(Product::class, 'CategoryID');
    }
}
