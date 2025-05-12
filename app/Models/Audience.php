<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Audience extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'serial',
        'title',
        'description',
        'serial_en',
        'title_en',
        'description_en',
        'status',
    ];
    protected $dates =['deleted_at'];

    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
