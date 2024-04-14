<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kapella Admin Dashboard</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="main-panel w-100  documentation">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 doc-header">
                                {{-- <a class="btn btn-success" href="{{ url('/acpdashboard') }}"><i
                                        class="mdi mdi-home me-2"></i>Back to
                                    home</a> --}}


                                @if (session()->get('position') === 'ACP')
                                    <a class="btn btn-success" href="{{ url('/acpdashboard') }}"><i
                                            class="mdi mdi-home me-2"></i>Back to
                                        home </a>
                                @elseif(session()->get('position') === 'Dy.Sp' || session()->get('position') === 'WDy.Sp')
                                    <a class="btn btn-success" href="{{ url('/dyspdash') }}"><i
                                            class="mdi mdi-home me-2"></i>Back to
                                        home </a>
                                @elseif(session()->get('position') === 'PI' || session()->get('position') === 'WPI')
                                    <a class="btn btn-success" href="{{ url('/pidash') }}"><i
                                            class="mdi mdi-home me-2"></i>Back to
                                        home </a>
                                @elseif(session()->get('position') === 'PSI' || session()->get('position') === 'WPSI')
                                    <a class="btn btn-success" href="{{ url('/psidash') }}"><i
                                            class="mdi mdi-home me-2"></i>Back to
                                        home </a>
                                @elseif(session()->get('position') === 'ASI' ||
                                        session()->get('position') == 'WASI' ||
                                        session()->get('position') == 'HC' ||
                                        session()->get('position') == 'WHC' ||
                                        session()->get('position') == 'PC' ||
                                        session()->get('position') == 'WPC')
                                    <a class="btn btn-success" href="{{ url('/asidash   ') }}"><i
                                            class="mdi mdi-home me-2"></i>Back to
                                        home </a>
                                @endif






                            </div>
                        </div>
                        <div class="row doc-content">
                            <div class="col-12 col-md-10 offset-md-1">
                                <div class="col-12 grid-margin" id="doc-intro">
                                    <div class="card">
                                        <div class="card-body">
                                            @foreach ($firingormation as $Dyspname)
                                                <div class="row">
                                                    <div class="col">
                                                        <h1>General Information</h1>
                                                        <p>District Name: {{ $Dyspname->District_Name }}</p>
                                                        <p>Unit Name: {{ $Dyspname->UnitName }}</p>
                                                        <p>FIR No: {{ $Dyspname->FIRNo }}</p>
                                                        <p>RI: {{ $Dyspname->RI }}</p>
                                                        <p>Year: {{ $Dyspname->Year }}</p>
                                                        <p>Month: {{ $Dyspname->Month }}</p>
                                                        <p>Offence From Date: {{ $Dyspname->Offence_From_Date }}</p>
                                                        <p>Offence To Date: {{ $Dyspname->Offence_To_Date }}</p>
                                                        <p>FIR Reg DateTime: {{ $Dyspname->FIR_Reg_DateTime }}</p>
                                                        <p>FIR Date: {{ $Dyspname->FIR_Date }}</p>
                                                        <p>FIR Type: {{ $Dyspname->FIR_Type }}</p>
                                                        <p>FIR Stage: {{ $Dyspname->FIR_Stage }}</p>
                                                        <p>Complaint Mode: {{ $Dyspname->Complaint_Mode }}</p>
                                                    </div>
                                                    <div class="col">
                                                        <h1>Crime Information</h1>
                                                        <p>Crime Group Name: {{ $Dyspname->CrimeGroup_Name }}</p>
                                                        <p>Crime Head Name: {{ $Dyspname->CrimeHead_Name }}</p>
                                                        <p>Latitude: {{ $Dyspname->Latitude }}</p>
                                                        <p>Longitude: {{ $Dyspname->Longitude }}</p>
                                                        <p>Act Section: {{ $Dyspname->ActSection }}</p>
                                                        <p>IO Name: {{ $Dyspname->IOName }}</p>
                                                        <p>KGID: {{ $Dyspname->KGID }}</p>
                                                        <p>IO Assigned Date: {{ $Dyspname->IOAssigned_Date }}</p>
                                                        <p>Internal IO: {{ $Dyspname->Internal_IO }}</p>
                                                        <p>Place of Offence: {{ $Dyspname->Place_of_Offence }}</p>
                                                        <p>Distance from PS: {{ $Dyspname->Distance_from_PS }}</p>
                                                        <p>Beat Name: {{ $Dyspname->Beat_Name }}</p>
                                                        <p>Village Area Name: {{ $Dyspname->Village_Area_Name }}</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <h1>Demographic Information</h1>
                                                        <p>Male: {{ $Dyspname->Male }}</p>
                                                        <p>Female: {{ $Dyspname->Female }}</p>
                                                        <p>Boy: {{ $Dyspname->Boy }}</p>
                                                        <p>Girl: {{ $Dyspname->Girl }}</p>
                                                        <p>Age 0: {{ $Dyspname->Age_0 }}</p>
                                                        <p>Victim Count: {{ $Dyspname->VICTIM_COUNT }}</p>
                                                        <p>Accused Count: {{ $Dyspname->Accused_Count }}</p>
                                                        <p>Arrested Male: {{ $Dyspname->Arrested_Male }}</p>
                                                        <p>Arrested Female: {{ $Dyspname->Arrested_Female }}</p>
                                                        <p>Arrested Count: {{ $Dyspname->Arrested_Count }}</p>
                                                        <p>Accused ChargeSheeted Count:
                                                            {{ $Dyspname->Accused_ChargeSheeted_Count }}</p>
                                                        <p>Conviction Count: {{ $Dyspname->Conviction_Count }}</p>
                                                    </div>
                                                    <div class="col">
                                                        <h1>Additional Information</h1>
                                                        <p>FIR ID: {{ $Dyspname->FIR_ID }}</p>
                                                        <p>Unit ID: {{ $Dyspname->Unit_ID }}</p>
                                                        <p>Crime No: {{ $Dyspname->Crime_No }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    < </body>

</html>
