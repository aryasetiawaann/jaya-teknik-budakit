<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Determine if the product is being referenced in other tables.
     *
     * @return bool
     */
    public function isReferencedElsewhere(): bool
    {
        return Product::where('category_id', $this->id)->exists();
    }
}
