<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable = [
        'title', 'sub_title','video','link' ,'category', 'category_en', 'description','description_en','title_en', 'sub_title_en','status'
   ];





    protected $dates = ['deleted_at'];

    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
