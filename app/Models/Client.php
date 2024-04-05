<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo',
        'link',
    ];

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model) {
            if ($model->isDirty('logo') && ($model->getOriginal('logo') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('logo'));
            }
        });
    }
}
