<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Associate extends Model
{
    protected $fillable = [
        'Level_ID',
        'Level_Name',
        'Level_Flag',
    ];
}
