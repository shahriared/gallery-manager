<?php

namespace Shahriared\GalleryManager\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    protected $fillable = ['name', 'description', 'is_published'];

    public function images()
    {
        return $this->hasMany(GalleryImage::class, 'gallery_id');
    }
}
