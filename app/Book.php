<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'description',
        'publish_year',
        'cover',
    ];

    public function author()
    {
        $this->belongsToMany("App\Author");
    }

    public function publisher()
    {
        $this -> hasMany('App\Publisher');
    }
}
