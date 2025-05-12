<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutUs extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'title_en',
        'sub_title_en',
        'description_en',
        'status',
    ];


    protected $dates = ['deleted_at'];


    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
