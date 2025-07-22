<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Restaurant extends Model
{
    use HasFactory, Sortable;

    // Restaurantモデル
public function categories()
{
    return $this->belongsToMany(Category::class);
}

public function regular_holidays()
{
    return $this->belongsToMany(RegularHoliday::class);
}


}

