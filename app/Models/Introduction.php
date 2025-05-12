<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Introduction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'aboutus',
        'memory',
        'backdrop',
        'aboutus_en',
        'memory_en',
        'backdrop_en',
        'status',
    ];

    protected $dates = ['deleted_at'];


    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
