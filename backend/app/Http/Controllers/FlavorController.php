<?php

namespace App\Http\Controllers;

use App\Flavor;

class FlavorController extends Controller {

    public function index() {
        return response()->json(Flavor::all());
    }

}
