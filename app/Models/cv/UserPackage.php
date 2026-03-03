<?php

namespace App\Models\cv;
use Illuminate\Database\Eloquent\Model;

class UserPackage extends Model {
    protected $fillable = ['user_id', 'cv_package_id', 'remaining_slots', 'status'];
    public function package() { return $this->belongsTo(CvPackage::class, 'cv_package_id'); }
}
