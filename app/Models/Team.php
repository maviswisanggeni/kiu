<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'position',
        'instagram',
    ];

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {
            if ($model->isDirty('photo') && ($model->getOriginal('photo') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('photo'));
            }
        });
    }
}
