<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //protected $table = 'table_name'   --assign table manually
    protected $casts = [
        'toppings' => 'array'
    ];

}
