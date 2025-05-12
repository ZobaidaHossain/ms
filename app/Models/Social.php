<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'subtitle','title_en', 'subtitle_en','status'];



    protected $dates = ['deleted_at'];


    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
