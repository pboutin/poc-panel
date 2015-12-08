<?php

namespace App\Http\Controllers;

use App\Flavor;
use App\Image;
use App\Server;
use Illuminate\Http\Request;

class ServerController extends Controller {

    public function index() {
        $servers = [];
        $images = [];
        $flavors = [];
        foreach (Server::with('image', 'flavor')->get() as $server) {
            $servers[] = $server->serialize();
            $images[$server->image->id] = $server->image->serialize();
            $flavors[$server->flavor->id] = $server->flavor->serialize();
        }
        return response()->json([
            'servers' => $servers,
            'images' => array_values($images),
            'flavors' => array_values($flavors)
        ]);
    }

    public function getById($id) {
        $server = Server::find($id);
        return response()->json([
            'server' => $server->serialize(),
            'image' => $server->image->serialize(),
            'flavor' => $server->flavor->serialize()
        ]);
    }

    public function create(Request $request) {
        $server = new Server();

        $server->hostname = $request->input('hostname');
        $server->ip = $request->input('ip');
        $server->status = 'on';

        $flavor = Flavor::find($request->input('flavor'));
        if (isset($flavor)) {
            $server->flavor()->associate($flavor);
        }

        $image = Image::find($request->input('image'));
        if (isset($image)) {
            $server->image()->associate($image);
        }

        $server->save();
        sleep(10);
        return response()->json([
            'server' => $server->serialize(),
            'image' => $server->image->serialize(),
            'flavor' => $server->flavor->serialize()
        ]);
    }

    public function update(Request $request, $id) {
        $server = Server::find($id);
        $server->hostname = $request->input('hostname');
        $server->ip = $request->input('ip');
        $server->save();
        return response()->json([
            'server' => $server->serialize()
        ]);
    }

    public function power(Request $request, $id) {
        $server = Server::find($id);
        $server->status = $server->status === 'on' ? 'off' : 'on';
        $server->save();
        sleep(5);
        return response()->json([
            'server' => $server->serialize()
        ]);
    }

    public function delete($id) {
        $server = Server::find($id);
        $server->delete();
        sleep(5);
        return response('', 204);
    }

}
