<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // public function product_id($id = null) {
    //     $data = Image::where('product_id', $id)->get();

    //     return count($data);
    // }
}
