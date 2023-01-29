<?php

namespace Shahriared\GalleryManager;

use Shahriared\GalleryManager\Http\Controllers\GalleryController;

class GalleryManager
{
    public function getGalleries()
    {
        return GalleryController::getAll();
    }

    public function createGallery($data)
    {
        return GalleryController::create($data);
    }

    public function updateGallery($data)
    {
        return GalleryController::update($data);
    }

    public function deleteGallery($id)
    {
        return GalleryController::delete($id);
    }
}
