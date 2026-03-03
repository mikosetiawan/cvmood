<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi (Mass Assignable).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'icon',
        'url',
        'category',
        'permission_name',
        'order',
    ];
}
