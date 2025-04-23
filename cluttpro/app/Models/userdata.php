<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userdata extends Model
{
    protected $table = 'userdata';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
    ];
}
