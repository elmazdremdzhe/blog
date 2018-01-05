<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Tag is a great candidate for caching  - get tags once and store them, until they change


    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

}
