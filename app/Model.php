<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
   //define common things for all models here.

   protected $guarded = [];

    //protected $guarded = ['user_id']; is inverse for fillable
}
