<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class challenge extends Model
{
    //
    protected $fillable = [
        'title', 'id', 'status', 'description', 'startDate', 'finishDate',
    ];
}
