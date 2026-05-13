<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'brand_name',
        'explanation',
        'price',
        'status',
        'image',
        'user_id',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
