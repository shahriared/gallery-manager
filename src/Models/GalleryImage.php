<?php

namespace Shahriared\GalleryManager\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $table = 'gallery_images';

    protected $fillable = ['gallery_id', 'name', 'description', 'alt', 'image'];
}
