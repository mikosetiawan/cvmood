<?php

namespace App\Models;

use App\Models\cv\UserCv;
use App\Models\cv\UserPackage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Relasi ke paket-paket yang dibeli user
     */
    public function userPackages(): HasMany
    {
        return $this->hasMany(UserPackage::class);
    }

    /**
     * Relasi ke semua CV yang telah dibuat user
     */
    public function userCvs(): HasMany
    {
        return $this->hasMany(UserCv::class);
    }

    /**
     * Helper untuk cek apakah user masih punya kuota CV aktif
     */
    public function hasActiveQuota(): bool
    {
        return $this->userPackages()
            ->where('status', 'active')
            ->where('remaining_slots', '>', 0)
            ->exists();
    }
}
