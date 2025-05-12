<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Heading extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=['title','subtitle','title_en','subtitle_en','link','image','status'];

    protected $datas=['deleted_at'];

    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }

}
