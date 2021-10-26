<?php

namespace App\Models;

use App\Models\MainCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'address',
        'schedule',
        'main_category_id',
        'sub_category_id',
    ];

    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
