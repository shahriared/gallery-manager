<?php

namespace Shahriared\GalleryManager\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Shahriared\GalleryManager\Models\Gallery;

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
            'description' => 'required',
            'is_published' => 'required|boolean',
        ])->validate();
        
        return Gallery::where(['id' => $validatedData['id']])->update($validatedData);
    }
}
