<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    // 子(Shop->Area)
    public function area() {
        return $this->belongsTo('App\Models\Area');
    }

    public function routes() {
        return $this->belongsToMany('App\Models\Route');
    }
}
