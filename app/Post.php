<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Set Table name
    protected $table = 'posts';
    // Set Primary Key
    public $primarykey = 'id';
    // Timestamps
    public $timestamps = true;

}
