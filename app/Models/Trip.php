<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillables = ['destinazione' , 'data_di_partenza', 'prezzo'];
}
