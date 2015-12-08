<?php

namespace App\Http\Controllers;

use App\Image;

class ImageController extends Controller {

    public function index() {
        return response()->json(Image::all());
    }

}
