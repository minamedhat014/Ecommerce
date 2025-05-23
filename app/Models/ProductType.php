<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductType extends Model
{
    use HasFactory;
    
    protected $table='product_types';

    protected $guarded =['id'];

    public function type(): HasMany
    {
        return $this->hasMany(Product::class);
    }
   
    public function offers()
    {
        return $this->belongsToMany(offer::class);
    }
}
