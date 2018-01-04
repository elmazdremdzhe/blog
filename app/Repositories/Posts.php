<?php

namespace App\Repositories;

use App\Post;
use App\Redis;

class Posts
{

    //Repositories folder - is just structuring your project models.
    // we keep here middle classes between controller and model. Mabybe
    // we keep here all methods that called in controller on model, to siplify controller
    // Also if our project has many subprojects, like blog, news, forum etc - we can structure them here


    protected $redis;

    public function __construct(Redis $redis)
    {
        $this->redis = $redis;
    }


    public function all()
    {
        return Post::all();
    }

}
