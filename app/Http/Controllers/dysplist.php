<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class dysplist extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        $districtname = session()->get("district");
        $dysplist = DB::select("SELECT DISTINCT IOName, UnitName,KGID ,Internal_IO FROM fir_data  WHERE IOName LIKE '%(Dy.Sp)%' OR IOName LIKE '%(WDy.Sp)%' AND District_Name = '$districtname'");
        $dyspcountmale = DB::select("SELECT COUNT(IOName) AS count FROM fir_data  WHERE IOName LIKE '%(Dy.Sp)%' AND District_Name = '$districtname'")[0]->count;
        $dyspcountfemale = DB::select("SELECT COUNT(IOName) AS count FROM fir_data  WHERE IOName LIKE '%(WDy.Sp)%' AND District_Name = '$districtname'")[0]->count;
        return view('/dysplist', compact('dysplist','dyspcountmale','dyspcountfemale'));
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
        $pilistfir = DB::select("SELECT * FROM fir_data  WHERE KGID='$id' AND District_Name = '$districtname'");
        // print_r($pilistfir);
        return view('pifirlist',compact('pilistfir') );
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

    public function gendermale()
    {
        $districtname = session()->get("district");
        $dysplist = DB::select("SELECT DISTINCT IOName, KGID ,Internal_IO ,FIR_ID FROM fir_data  WHERE IOName LIKE '%(Dy.Sp)%' AND District_Name = '$districtname'");
        $dyspcountmale = DB::select("SELECT COUNT(IOName) AS count FROM fir_data  WHERE IOName LIKE '%(Dy.Sp)%' AND District_Name = '$districtname'")[0]->count;
        $dyspcountfemale = DB::select("SELECT COUNT(IOName) AS count FROM fir_data  WHERE IOName LIKE '%(WDy.Sp)%' AND District_Name = '$districtname'")[0]->count;
        return view('/dysplist', compact('dysplist','dyspcountmale','dyspcountfemale'));
    }

    public function genderfemale()
    {
        $districtname = session()->get("district");
        $dysplist = DB::select("SELECT DISTINCT IOName, KGID ,Internal_IO ,FIR_ID FROM fir_data  WHERE IOName LIKE '%(WDy.Sp)%' AND District_Name = '$districtname'");
        $dyspcountmale = DB::select("SELECT COUNT(IOName) AS count FROM fir_data  WHERE IOName LIKE '%(Dy.Sp)%' AND District_Name = '$districtname'")[0]->count;
        $dyspcountfemale = DB::select("SELECT COUNT(IOName) AS count FROM fir_data  WHERE IOName LIKE '%(WDy.Sp)%' AND District_Name = '$districtname'")[0]->count;
        return view('/dysplist', compact('dysplist','dyspcountmale','dyspcountfemale'));
    }
}
