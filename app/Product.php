<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];


    public function getPriceWithName()
    {
        return $this->title . ' ( هر متر ' . $this->price . ' تومان )';
    }
}
