<?php

namespace App\Http\Controllers;

use App\Server;
use Illuminate\Http\Request;

class ServerController extends Controller {

    public function index() {
        return response()->json(Server::all());
    }

    public function getById($id) {
        return response()->json(Server::find($id));
    }

    public function create(Request $request) {
        $newServer = Server::create($request->all());
        $newServer->status = 'on';
        $newServer->save();
        sleep(10);
        return response()->json($newServer);
    }

    public function update(Request $request, $id) {
        $server = Server::find($id);
        $server->hostname = $request->input('hostname');
        $server->ip = $request->input('ip');
        $server->save();
        return response()->json($server);
    }

    public function power(Request $request, $id) {
        $server = Server::find($id);
        $server->status = $server->status === 'on' ? 'off' : 'on';
        $server->save();
        sleep(5);
        return response()->json($server);
    }

    public function delete($id) {
        $server = Server::find($id);
        $server->delete();
        sleep(5);
        return response('', 204);
    }

}
