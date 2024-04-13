<?php

namespace App\Http\Controllers;

use App\Models\acercade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcercadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('AcercaDe.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(acercade $acercade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(acercade $acercade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, acercade $acercade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(acercade $acercade)
    {
        //
    }
}
