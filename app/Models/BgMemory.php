<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BgMemory extends Model
{
    use HasFactory;
    protected $fillable = ['title','title_en','image', 'description','description_more','description_en','description_more_en', 'status'];


    protected $dates = ['deleted_at'];


    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
