<?php

namespace App\Http\Controllers;

use App\Image;

class ImageController extends Controller {

    public function index() {
        $images = [];
        foreach (Image::all() as $image) {
            $images[] = $image->serialize();
        }
        return response()->json([
            'images' => $images
        ]);
    }

}
