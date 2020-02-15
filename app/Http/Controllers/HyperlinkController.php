<?php

namespace App\Http\Controllers;

use App\Hyperlink;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HyperlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::create(Hyperlink::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return Response::create('', 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hyperlink::create($request->all());
        return Response::create('', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hyperlink  $hyperlink
     * @return \Illuminate\Http\Response
     */
    public function show(Hyperlink $hyperlink)
    {
        return Response::create($hyperlink);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hyperlink  $hyperlink
     * @return \Illuminate\Http\Response
     */
    public function edit(Hyperlink $hyperlink)
    {
        return Response::create('', 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hyperlink  $hyperlink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hyperlink $hyperlink)
    {
        $hyperlink->update($request->all());
        return Response::create('', 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Hyperlink $hyperlink
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Hyperlink $hyperlink)
    {
        $hyperlink->delete();
        return Response::create('');
    }
}
