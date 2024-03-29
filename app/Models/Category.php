<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name"];

    public function company()
    {
        return $this->hasMany(Company::class);
    }

    public function listing()
    {
        return $this->hasMany(Listing::class);
    }
}
