<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeEnabled(Builder $builder, bool $isGalleryEnabled = true)
    {
        return $builder->where('enabled', $isGalleryEnabled);
    }
}
