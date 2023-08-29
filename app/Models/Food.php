<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'description',
        'photo',
        'price'
    ];

    public function llsts()
    {
        return $this->hasMany(FoodList::class);
    }
}
