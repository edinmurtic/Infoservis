<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Edukator;
use Illuminate\Http\Request;

class EdukatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edukators=DB::table('edukators')
        ->get();
return view('edukators.index',['edukators'=>$edukators]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Edukator  $edukator
     * @return \Illuminate\Http\Response
     */
    public function show(Edukator $edukator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Edukator  $edukator
     * @return \Illuminate\Http\Response
     */
    public function edit(Edukator $edukator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Edukator  $edukator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edukator $edukator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Edukator  $edukator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edukator $edukator)
    {
        //
    }
}
