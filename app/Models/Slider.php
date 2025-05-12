<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'title_en',
        'image',
        'sub_title',
        'sub_title_en',
        'link',
        'status',
    ];

    protected $dates = ['deleted_at'];

    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
