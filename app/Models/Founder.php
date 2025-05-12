<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Founder extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'title_en',
        'image',
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
