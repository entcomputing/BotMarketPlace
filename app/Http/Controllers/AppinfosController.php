<?php

namespace App\Http\Controllers;

use App\Models\Appinfos;
use Illuminate\Http\Request;

class AppinfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appinfo = Appinfos::first();
        return view("models.info.index", compact("appinfo"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Appinfos::create(Appinfos::data());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appinfos  $appinfos
     * @return \Illuminate\Http\Response
     */
    public function show(Appinfos $appinfos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appinfos  $appinfos
     * @return \Illuminate\Http\Response
     */
    public function edit(Appinfos $appinfos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appinfos  $appinfos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appinfos $appinfos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appinfos  $appinfos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appinfos $appinfos)
    {
        //
    }
}
