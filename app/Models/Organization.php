<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Photo;
class Organization extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'title_en',
        'description_en',
        'status',
    ];




    protected $dates = ['deleted_at'];

    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'Inactive';
    }

    public function photos()
{
    return $this->hasMany(Photo::class);
}
}
