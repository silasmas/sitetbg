<?php

namespace App\Models;

use App\Models\images;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class portofolio extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];
    public $translatable = ['titre', 'description'];
    public function images()
    {
        return $this->hasMany(images::class);
    }
}
