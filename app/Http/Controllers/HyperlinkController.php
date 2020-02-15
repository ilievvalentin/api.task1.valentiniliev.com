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

    public function update($id, Request $request) {
        Hyperlink::all()->find($id)->update($request->all());
    }

    public function delete($id) {
        try {
            Hyperlink::all()->find($id)->delete();
            return 200;
        } catch (Exception $e) {
            return 400;
        }
    }

}
