<?php

namespace App\Http\Controllers;

use App\Flavor;

class FlavorController extends Controller {

    public function index() {
        $flavors = [];
        foreach (Flavor::all() as $flavor) {
            $flavors[] = $flavor->serialize();
        }
        return response()->json([
            'flavors' => $flavors
        ]);
    }

}
