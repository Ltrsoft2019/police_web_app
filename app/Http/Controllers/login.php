<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class login extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
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
        $request->validate([
            'KGID' => 'required',
            'Internal_IO' => 'required',
        ]);
    
        $login = DB::select("SELECT DISTINCT Internal_IO, KGID,District_Name, IOName FROM fir_data ");
        foreach ($login as $IOName) {
            $KGID = $IOName->KGID;
            $Internal_IO = $IOName->Internal_IO;
            if ($KGID == $request->input('KGID') && $Internal_IO == $request->input('Internal_IO')) {
                $IOName_id = $IOName->IOName;
                $district = $IOName->District_Name;
                session()->put('district', $district);
                $KGID = $IOName->KGID;
                $Internal_IO = $IOName->Internal_IO;
                session()->put('IOName', $IOName);
                session()->put('KGID', $KGID);
                session()->put('Internal_IO', $Internal_IO);

                if (preg_match('/\((.*?)\)/', $IOName_id, $matches)) {
                    $value = $matches[1];
                    session()->put('position', $value);

                    if ($value == 'ACP') {
                        return redirect('/acpdashboard');
                    } elseif ($value == 'Dy.Sp') {
                        return redirect('/dyspdash');
                    } elseif ($value == 'PI') {
                        return redirect('/pidash');
                    } elseif ($value == 'PSI') {
                        return redirect('/psidash');
                    } elseif ($value == 'ASI' || $value == 'HC' || $value == 'WHC' || $value == 'PC' || $value == 'WPC') {
                        return redirect('/asidash');
                    }
                }
            }
        }
    
        // If no redirection happened within the loop, it means no match was found
        // Redirect to login page with an error message
        return redirect('/')->with('error', 'Invalid email or password');
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
    public function logout()
    {
        session()->forget('KGID');
        // Any other logout logic you may have
        return redirect('/');
    }
}
