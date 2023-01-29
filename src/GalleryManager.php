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

    public function deleteGallery($gallery_id)
    {
        return GalleryController::delete($gallery_id);
    }

    public function addImageToGallery($gallery_id, $data)
    {
        return GalleryController::addImage($gallery_id, $data);
    }
}
