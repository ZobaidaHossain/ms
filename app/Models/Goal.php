<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'serial',
        'title_en',
        'subtitle_en',
        'serial_en',
        'status',
    ];




    protected $dates = ['deleted_at'];

    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
}
