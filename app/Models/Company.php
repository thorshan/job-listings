<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_id",
        "user_id",
        "name",
        "image",
        "email",
        "website",
        "description",
        "slogan",
        "company_type",
        "status"
    ];

    public function listing()
    {
        return $this->hasMany(Listing::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
