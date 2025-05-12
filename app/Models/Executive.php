<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Executive extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name', 'designation', 'name_en', 'designation_en', 'image', 'status'
    ];



    protected $dates = ['deleted_at'];

    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
