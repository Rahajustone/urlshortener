<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public $table = "links";
    
    protected $fillable = [
        'link', 'hash',
    ];
}
