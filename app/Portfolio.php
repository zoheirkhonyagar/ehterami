<?php

namespace App;

use App\Subcategory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $guarded = [];

    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class , 'portfolio_subcategory' , 'portfolio_id' , 'subcategory_id');
    }
}
