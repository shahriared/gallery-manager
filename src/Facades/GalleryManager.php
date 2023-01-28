<?php

namespace Shahriared\GalleryManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shahriared\GalleryManager\GalleryManager
 */
class GalleryManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Shahriared\GalleryManager\GalleryManager::class;
    }
}
