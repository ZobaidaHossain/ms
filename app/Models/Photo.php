<?php

namespace App\Models;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'organization_id',
        'image',
        'status',
    ];

    protected $dates = ['deleted_at'];

    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }
    public function organization()
{
    return $this->belongsTo(Organization::class);
}


}
