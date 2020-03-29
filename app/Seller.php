<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'users';

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
