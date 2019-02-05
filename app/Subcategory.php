<?php

namespace App;

use App\Category;
use App\Portfolio;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class , 'portfolio_subcategory' , 'subcategory_id' , 'portfolio_id');
    }


}
