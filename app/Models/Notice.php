<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    protected $fillable =[
        'serial',
        'title',
        'serial_en',
        'title_en',
        'pdf',
        'status',
    ];
    protected $dates =['deleted_at'];

    public function getStatusAttribute($value){
        return $value ? 'Active' : 'Inactive';
    }
}
