<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id', 'title', 'description'
    ];

    public function auctions()
    {
        return $this->hasMany(Auction::class);
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
