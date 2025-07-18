<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    // Restaurantモデル
public function categories()
{
    return $this->belongsToMany(Category::class);
}

public function regular_holidays()
{
    return $this->belongsToMany(Category::class);
}


}

