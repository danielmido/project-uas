<?php

namespace App\Http\Controllers;

use App\Models\Varian;
use Illuminate\Http\Request;

class VarianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $varian = Varian::all();
        //dd($varian);
        return view('varian.index', compact('varian'));
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
    public function show(Varian $varian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Varian $varian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Varian $varian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Varian $varian)
    {
        //
    }
}
