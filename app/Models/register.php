<?php

namespace App\Models;


use App\Models\clientregister;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class register extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];
    // protected $with = ['client'];

    public function client()
    {
        return $this->hasMany(clientregister::class);
    }
}
