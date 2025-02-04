<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class firinformation extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Fir_information');
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
    public function show(string $id)
    {
        $districtname = session()->get("district");
   
        $firingormation = DB::select("SELECT *  FROM fir_data WHERE id = '$id' AND District_Name = '$districtname' ");
        // print_r($firingormation);
        return view('fir_information',compact('firingormation') );

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
