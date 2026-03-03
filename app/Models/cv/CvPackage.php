<?php

namespace App\Models\cv;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CvPackage extends Model
{
    protected $fillable = [
        'name',
        'price',
        'cv_limit',
        'description'
    ];

    public function userPackages(): HasMany
    {
        return $this->hasMany(UserPackage::class);
    }
}
