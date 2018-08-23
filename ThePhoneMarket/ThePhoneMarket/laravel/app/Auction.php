<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = [
        'title', 'description', 'dimensions', 'price', 'min_bid'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function showMessage($request, $message)
    {
        return $request->session()->flash('message', $message);
    }
}
