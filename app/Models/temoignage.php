<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class temoignage extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];
    public $translatable = ['description'];

    public function portfolio()
    {
        return $this->belongsTo(portofolio::class);
    }
}
