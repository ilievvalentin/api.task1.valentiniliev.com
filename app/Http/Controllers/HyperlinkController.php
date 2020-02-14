<?php

namespace App\Http\Controllers;

use App\Hyperlink;
use Exception;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class HyperlinkController extends Controller
{

    public function all() {
        return Hyperlink::all();
    }

    public function get($id) {
        return Hyperlink::all()->find($id);
    }

    public function create(Request $request) {
        Hyperlink::create($request->all());
    }

    public function update(Hyperlink $hyperlink, Request $request) {
        $hyperlink->update($request->all());
    }

    public function delete(Hyperlink $hyperlink) {
        try {
            $hyperlink->delete();
        } catch (Exception $e) {
        }
    }

}
