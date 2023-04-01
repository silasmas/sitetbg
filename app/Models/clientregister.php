<?php

namespace App\Models;


use App\Models\register;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class clientregister extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];
    // protected $with = ['register'];

    public function register()
    {
        return $this->belongsTo(register::class);
    }
}
