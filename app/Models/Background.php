<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Background extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'title_en',
        'sub_title',
        'sub_title_en',
        'description',
        'description_en',
        'status',
    ];

    protected $dates = ['deleted_at'];


    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
