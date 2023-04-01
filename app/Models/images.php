<?php

namespace App\Models;

use App\Models\portofolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class images extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];

    public function portofolio()
    {
        return $this->belongsTo(portofolio::class);
    }
}