<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [ 'name', 'email', 'phone', 'city', 'state', 'country' ];
}
