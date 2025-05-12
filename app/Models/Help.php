<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    use HasFactory;
    protected $fillable =[
        'foundation_name',
        'account_number',
        'bank_name',
        'branch',
        'foundation_name_en',
        'account_number_en',
        'bank_name_en',
        'branch_en',
        'status',
    ];
    protected $dates =['deleted_at'];

    public function getStatusAttribute($value){
        return $value ? 'Active' : 'Inactive';
    }
}
