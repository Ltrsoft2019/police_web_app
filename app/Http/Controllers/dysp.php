<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dysp extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $yearlyCounts = [];
        $MonthFIRCounts = [];
        $MonthNonHeinousCounts = [];
        $MonthHeinousCounts = [];

        $ArrestedCounts = [];
        $ArrestedMaleCounts = [];
        $ArrestecFemaleCounts = [];

        $districtname = session()->get("district");


        $district = DB::select("SELECT DISTINCT District_Name FROM fir_data");
        $UnitName = DB::select("SELECT DISTINCT UnitName FROM fir_data");
        $VICTIM_COUNT = DB::select("SELECT SUM(VICTIM_COUNT) AS count FROM fir_data WHERE VICTIM_COUNT != 0 AND District_Name = '$districtname' ")[0]->count;
        $Accused_Count = DB::select("SELECT SUM(Accused_Count) AS count FROM fir_data WHERE Accused_Count != 0 AND District_Name = '$districtname' ")[0]->count;
        $Conviction_Count = DB::select("SELECT SUM(Conviction_Count) AS count FROM fir_data WHERE Conviction_Count != 0 AND District_Name = '$districtname' ")[0]->count;
        $Accused_ChargeSheeted_Count = DB::select("SELECT SUM(Accused_ChargeSheeted_Count) AS count FROM fir_data WHERE Accused_ChargeSheeted_Count != 0 AND District_Name = '$districtname' ")[0]->count;
        $RI = DB::select("SELECT SUM(RI) AS count FROM fir_data WHERE RI != 0 AND District_Name = '$districtname'")[0]->count;
        $Complaint_Mode = DB::select("SELECT COUNT(Complaint_Mode) AS count FROM fir_data Where  District_Name = '$districtname' ")[0]->count;
        $Beat_Name = DB::select("SELECT COUNT(DISTINCT Beat_Name) AS count FROM fir_data WHERE  District_Name = '$districtname' ")[0]->count;
        $Village_Area_Name = DB::select("SELECT COUNT(DISTINCT Village_Area_Name) AS count FROM fir_data Where  District_Name = '$districtname' ")[0]->count;


        for ($i = 2024; $i >= 2016; $i--) {
            $fir_year_count = DB::select("SELECT COUNT(FIRNo) AS count FROM fir_data WHERE Year = '$i' AND District_Name = '$districtname' ")[0]->count;
            $yearlyCounts[$i] = $fir_year_count;
        }
        $DySP =0; //DB::select("SELECT COUNT(IOName) AS count FROM fir_data  WHERE IOName LIKE '%(Dy.Sp)%' AND District_Name = '$districtname'")[0]->count;
        $PI = DB::select("SELECT COUNT(IOName) AS count FROM fir_data  WHERE IOName LIKE '%(PI)%' AND District_Name = '$districtname'")[0]->count;
        $PSI = DB::select("SELECT COUNT(IOName) AS count FROM fir_data  WHERE IOName LIKE '%(PSI)%' AND District_Name = '$districtname'")[0]->count;
        $ASI = DB::select("SELECT COUNT(IOName) AS count FROM fir_data  WHERE IOName LIKE '%(ASI)%' AND District_Name = '$districtname'")[0]->count;
        $HConstable = DB::select("SELECT COUNT(IOName) AS count FROM fir_data  WHERE IOName LIKE '%(HC)%'  OR IOName LIKE '%(WHC)%' AND District_Name = '$districtname'")[0]->count;
        $Constable = DB::select("SELECT COUNT(IOName) AS count FROM fir_data  WHERE IOName LIKE '%(PC)%' OR IOName LIKE '%(WPC)%' AND District_Name = '$districtname'")[0]->count;

        $result = DB::select("SELECT SUM(Male + Boy) AS totalCount FROM fir_data WHERE Male != 0 OR Boy != 0 AND District_Name = '$districtname'");
        $Male = $result[0]->totalCount;

        $resultFemale = DB::select("SELECT SUM(Female+Girl) AS totalCountfemale  FROM fir_data WHERE Female != 0 OR Girl != 0 AND District_Name = '$districtname'");
        $Female = $resultFemale[0]->totalCountfemale;


        for ($i = 1; $i <= 12; $i++) {
            $fir_Month_count = DB::select("SELECT COUNT(FIRNo) AS count FROM fir_data WHERE Month = '$i' AND District_Name = '$districtname'")[0]->count;
            $MonthFIRCounts[$i] = $fir_Month_count;
        }
        for ($i = 1; $i <= 12; $i++) {
            $fir_Month_count = DB::select("SELECT COUNT(FIRNo) AS count FROM fir_data WHERE Month = '$i' AND FIR_Type='Non Heinous' AND District_Name = '$districtname' ")[0]->count;
            $MonthNonHeinousCounts[$i] = $fir_Month_count;
        }
        for ($i = 1; $i <= 12; $i++) {
            $fir_Month_count = DB::select("SELECT COUNT(FIRNo) AS count FROM fir_data WHERE Month = '$i' AND FIR_Type='Heinous' AND District_Name = '$districtname' ")[0]->count;
            $MonthHeinousCounts[$i] = $fir_Month_count;
        }


        for ($i = 1; $i <= 12; $i++) {
            $fir_Month_count = DB::select("SELECT SUM(Arrested_Count)  FROM fir_data WHERE Month = '$i' AND District_Name = '$districtname' ");
            $ArrestedCounts[$i] = $fir_Month_count;
        }

        for ($i = 1; $i <= 12; $i++) {
            $fir_Month_count = DB::select("SELECT SUM(Arrested_Male)  FROM fir_data WHERE Month = '$i'AND District_Name = '$districtname' ");
            $ArrestedMaleCounts[$i] = $fir_Month_count;
        }
        for ($i = 1; $i <= 12; $i++) {
            $fir_Month_count = DB::select("SELECT SUM(Arrested_Female)  FROM fir_data WHERE Month = '$i' AND District_Name = '$districtname' ");
            $ArrestecFemaleCounts[$i] = $fir_Month_count;
        }

        
        // print_r($ArrestedMaleCounts);
        return view('dyspdash',compact('district','UnitName','VICTIM_COUNT','Accused_Count','Conviction_Count','Accused_ChargeSheeted_Count','RI','Complaint_Mode',"Beat_Name",'Village_Area_Name','yearlyCounts'
        ,'DySP','PI','PSI','ASI','HConstable','Constable','Male','Female','MonthFIRCounts','MonthHeinousCounts','MonthNonHeinousCounts','ArrestedCounts','ArrestedMaleCounts','ArrestecFemaleCounts'));
   
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
        //
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
