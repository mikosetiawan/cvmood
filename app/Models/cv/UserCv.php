<?php

namespace App\Models\cv;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserCv extends Model
{
    protected $fillable = [
        'user_id',
        'cv_template_id',
        'user_package_id',
        'cv_title',
        'content'
    ];

    /**
     * Content secara otomatis di-cast menjadi array/object
     * agar mudah diakses di Controller atau Blade
     */
    protected $casts = [
        'content' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function template(): BelongsTo
    {
        return $this->belongsTo(CvTemplate::class, 'cv_template_id');
    }

    public function userPackage(): BelongsTo
    {
        return $this->belongsTo(UserPackage::class);
    }
}
