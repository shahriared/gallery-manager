<?php

namespace Shahriared\GalleryManager\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Shahriared\GalleryManager\Models\Gallery;
use Shahriared\GalleryManager\Models\GalleryImage;

class GalleryController
{
    public static function getAll()
    {
        return Gallery::all();
    }

    public static function create($data)
    {
        $validatedData = Validator::make($data, [
            'name' => 'required|max:255',
            'year' => 'required',
            'description' => 'required',
            'is_published' => 'required|boolean',
        ])->validate();
        
        return Gallery::create($validatedData);
    }

    public static function update($data)
    {
        $validatedData = Validator::make($data, [
            'id' => 'required|exists:galleries,id',
            'name' => 'required|max:255',
            'year' => 'required',
            'description' => 'required',
            'is_published' => 'required|boolean',
        ])->validate();
        
        return Gallery::where(['id' => $validatedData['id']])->update($validatedData);
    }
    
    public static function delete($id)
    {
        $images = GalleryImage::where('gallery_id', '=', $id)->get();
        foreach ($images as $img) {
            Storage::delete($img->image);
        }
        return Gallery::where(['id' => $id])->delete();
    }

    public static function addImage($id, $data)
    {
        if (!Gallery::find($id)) {
            return null;
        }
        $validatedData = Validator::make($data, [
            'name' => 'required|max:255',
            'description' => 'required',
            'alt' => 'required',
            'file' => 'required',
        ])->validate();

        $temp = [];
        $temp['gallery_id'] = $id;
        $temp['name'] = $validatedData['name'];
        $temp['description'] = $validatedData['description'];
        $temp['alt'] = $validatedData['alt'];
        $temp['image'] = null;


        $imageFile = $validatedData['file'];
        $imagePath =  $imageFile->store('public/gallery-images');

        if ($imagePath) {
            $temp['image'] = $imagePath;
            return GalleryImage::create($temp);
        } 
        
        return null;
    }

    public static function deleteImage($gallery_id, $gallery_image_id)
    {
        if (!Gallery::find($gallery_id)) {
            return null;
        }

        $image = GalleryImage::where('id', '=', $gallery_image_id)->where('gallery_id', '=', $gallery_id)->firstOrFail();
        Storage::delete($image->image);
        $image->delete();

        return true;
    }
}
