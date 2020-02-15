<?php

namespace App\Http\Controllers;

use App\Hyperlink;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HyperlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Response::create(Hyperlink::all());
    }

    /**
     * Display the specified resource.
     *
     * @param Hyperlink $hyperlink
     * @return Response
     */
    public function show(Hyperlink $hyperlink)
    {
        return Response::create($hyperlink);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Hyperlink $hyperlink
     * @return Response
     */
    public function update(Request $request, Hyperlink $hyperlink)
    {
        $hyperlink->update($request->all());
        return Response::create('', 200);

    }

}
