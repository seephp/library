<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = [
        'title',
    ];

    public function book_pub()
    {
        $this -> belongsTo('App\Book');
    }
}
