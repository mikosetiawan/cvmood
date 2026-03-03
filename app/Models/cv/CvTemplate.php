<?php

namespace App\Models\cv;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CvTemplate extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'view_path',
        'is_premium'
    ];

    /**
     * Cast is_premium ke boolean
     */
    protected $casts = [
        'is_premium' => 'boolean',
    ];

    public function userCvs(): HasMany
    {
        return $this->hasMany(UserCv::class);
    }
}
