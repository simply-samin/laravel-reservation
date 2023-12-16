<?php

namespace App\Models;

use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'company_id',
        'guide_id',
        'name',
        'description',
        'start_time',
        'price',
        'photo'
    ];
 
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
 
    public function participants()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    //Mutator for price attribute
    public function price(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value / 100,
            set: fn($value) => $value * 100,
        );
    }

    public function thumbnail(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->photo ? '/activities/thumbs/' . $this->photo : '/no_image.jpg',
        );
    }
}