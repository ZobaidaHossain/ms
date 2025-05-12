<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'link', 'email', 'address','address_en', 'number_en', 'number_bn', 'status'
    ];



    protected $dates = ['deleted_at'];

    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
