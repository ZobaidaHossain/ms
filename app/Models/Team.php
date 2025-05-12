<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['serial','name', 'designation','serial_en','name_en', 'designation_en', 'image','pdf', 'status'];



    protected $dates = ['deleted_at'];


    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
