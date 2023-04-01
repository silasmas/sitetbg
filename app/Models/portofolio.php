<?php

namespace App\Models;

use App\Models\images;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class portofolio extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];
    public function images()
    {
        return $this->hasMany(images::class);
    }
}