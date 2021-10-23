<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'glyph',
        'name', 
        'activity',
        'description',
        'link',
        'address',
        'phone',
        'contact',
        'hours',
        'email',
        'address',
        'zipcode',
        'city',
        'address_id',
        'schedule_id',
        'main_category_id',
        'sub_category_id',
    ];
}
