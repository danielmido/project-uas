<?php

namespace App\Http\Controllers;

use App\Models\varian;
use Illuminate\Http\Request;

class VarianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakultas = Varian::all();
        return view('Varian.index', compact('varian'));
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
    public function show(varian $varian)
    {
        // dd($varian)
        return view('varian.show', compact('varian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(varian $varian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, varian $varian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(varian $varian)
    {
        //
    }
}
