<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'description',
        'description_en',

    ];

    protected $dates = ['deleted_at'];


    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
