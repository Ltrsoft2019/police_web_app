@extends('header_footer_layout.main');
@section('main-container')
    <!-- partial -->


    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-6 mb-4 mb-xl-0">
                        <div class="d-lg-flex align-items-center">
                            <div>
                                <h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
                                <h6 class="font-weight-normal mb-2">After Some Time</h6>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center justify-content-md-end">
                            {{-- <div class="pe-1 mb-3 mb-xl-0">
                                <button type="button" class="btn btn-outline-inverse-info btn-icon-text"
                                    id="nreportDropdownunit" data-bs-toggle="dropdown">
                                    Unit
                                    <i class="mdi mdi-message-outline btn-icon-append"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="nreportDropdownunit">
                                    <p class="mb-0 font-weight-medium float-left dropdown-header">Unit</p>
                                    @foreach ($UnitName as $item)
                                        <a class="dropdown-item">
                                            <i class="mdi mdi-file-pdf text-primary"></i>
                                            {{ $item->UnitName }}
                                        </a>
                                    @endforeach()


                                </div>
                            </div> --}}
                            <div class="pe-1 mb-3 mb-xl-0">
                                <button type="button" class="btn btn-outline-inverse-info btn-icon-text"
                                    id="nreportDropdown" data-bs-toggle="dropdown">
                                    District
                                    <i class="mdi mdi-help-circle-outline btn-icon-append"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="nreportDropdown">
                                    <p class="mb-0 font-weight-medium float-left dropdown-header">District</p>
                                    @foreach ($district as $item)
                                        {{-- <a class="dropdown-item" href="{{ url('/acpdashboard/' . $item->District_Name) }}">
                                            <i class="mdi mdi-file-pdf text-primary"></i>
                                            {{ $item->District_Name }}
                                        </a> --}}
                                        @if (session()->get('position') === 'ACP')
                                        <a class="dropdown-item"
                                            href="{{ url('/acpdashboard/' . $item->District_Name) }}">
                                            <i class="mdi mdi-file-pdf text-primary"></i>
                                            {{ $item->District_Name }} </a>
                                    @elseif(session()->get('position') === 'Dy.Sp' || session()->get('position') === 'WDy.Sp')
                                        <a class="dropdown-item"
                                            href="{{ url('/dyspdash/' . $item->District_Name) }}">
                                            <i class="mdi mdi-file-pdf text-primary"></i>
                                            {{ $item->District_Name }} </a>
                                    @elseif(session()->get('position') === 'PI' || session()->get('position') === 'WPI')
                                        <a class="dropdown-item"
                                            href="{{ url('/pidash/' . $item->District_Name) }}">
                                            <i class="mdi mdi-file-pdf text-primary"></i>
                                            {{ $item->District_Name }} </a>
                                    @elseif(session()->get('position') === 'PSI' || session()->get('position') === 'WPSI')
                                        <a class="dropdown-item"
                                            href="{{ url('/psidash/' . $item->District_Name) }}">
                                            <i class="mdi mdi-file-pdf text-primary"></i>
                                            {{ $item->District_Name }}
                                        </a>
                                    @elseif(session()->get('position') === 'ASI' ||
                                            session()->get('position') == 'WASI' ||
                                            session()->get('position') == 'HC' ||
                                            session()->get('position') == 'WHC' ||
                                            session()->get('position') == 'PC' ||
                                            session()->get('position') == 'WPC')
                                        <a class="dropdown-item"
                                            href="{{ url('/asidash/' . $item->District_Name) }}">
                                            <i class="mdi mdi-file-pdf text-primary"></i>
                                            {{ $item->District_Name }} </a>
                                    @endif
                                    @endforeach()
                                </div>
                            </div>
                            {{-- <div class="pe-1 mb-3 mb-xl-0">
                                <button type="button" class="btn btn-outline-inverse-info btn-icon-text">
                                    Emergancy
                                    <i class="mdi mdi-phone"></i>
                                </button>
                            </div> --}}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-success font-weight-bold">{{ $VICTIM_COUNT }}</h2>
                                    <i class="mdi mdi-account-outline mdi-18px text-dark"></i>
                                </div>
                            </div>
                            <canvas id="newClient"></canvas>
                            <div class="line-chart-row-title">Victim</div>
                        </div>
                    </div>
                    <div class="col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-danger font-weight-bold">{{ $Accused_Count }}</h2>
                                    <i class="mdi mdi-refresh mdi-18px text-dark"></i>
                                </div>
                            </div>
                            <canvas id="allProducts"></canvas>
                            <div class="line-chart-row-title">Accused</div>
                        </div>
                    </div>
                    <div class="col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-info font-weight-bold">{{ $Conviction_Count }}</h2>
                                    <i class="mdi mdi-file-document-outline mdi-18px text-dark"></i>
                                </div>
                            </div>
                            <canvas id="invoices"></canvas>
                            <div class="line-chart-row-title">Convicted</div>
                        </div>
                    </div>
                    <div class="col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-warning font-weight-bold">{{ $Accused_ChargeSheeted_Count }}</h2>
                                    <i class="mdi mdi-folder-outline mdi-18px text-dark"></i>
                                </div>
                            </div>
                            <canvas id="projects"></canvas>
                            <div class="line-chart-row-title">ChartSheet</div>
                        </div>
                    </div>
                    <div class="col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-secondary font-weight-bold">{{ $RI }}</h2>
                                    <i class="mdi mdi-cart-outline mdi-18px text-dark"></i>
                                </div>
                            </div>
                            <canvas id="orderRecieved"></canvas>
                            <div class="line-chart-row-title">RI</div>
                        </div>
                    </div>
                    <div class="col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-dark font-weight-bold">7826</h2>
                                    <i class="mdi mdi-cash text-dark mdi-18px"></i>
                                </div>
                            </div>
                            <canvas id="transactions"></canvas>
                            <div class="line-chart-row-title"> </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 flex-column d-flex stretch-card">
                        <div class="row">
                            {{-- <div class="col-lg-2 d-flex grid-margin stretch-card">
                                <div class="card sale-visit-statistics-border">
                                    <a href="{{ url('/dysplist') }}" style="text-decoration: none; color: inherit;">
                                    <div class="card-body">
                                        <h2 class="text-dark mb-2 font-weight-bold">{{ $DySP }}</h2>
                                        <h4 class="card-title mb-2">Dysp</h4>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 d-flex grid-margin stretch-card">
                                <div class="card sale-diffrence-border">
                                    <a href="{{ url('/pilist') }}" style="text-decoration: none; color: inherit;">

                                    <div class="card-body">
                                        <h2 class="text-dark mb-2 font-weight-bold">{{ $PI }}</h2>
                                        <h4 class="card-title mb-2"> PI
                                        </h4>
                                    </div>
                                    </a>
                                </div>
                            </div> --}}
                            <div class="col-lg-3 d-flex grid-margin stretch-card">
                                <div class="card sale-diffrencegreen-border">
                                    <a href="{{ url('/psilist') }}" style="text-decoration: none; color: inherit;">

                                    <div class="card-body">
                                        <h2 class="text-dark mb-2 font-weight-bold">{{ $PSI }}</h2>
                                        <h4 class="card-title mb-2">PSI</h4>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex grid-margin stretch-card">
                                <div class="card sale-diffrencered-border">
                                    <a href="{{ url('/asilist') }}" style="text-decoration: none; color: inherit;">

                                    <div class="card-body">
                                        <h2 class="text-dark mb-2 font-weight-bold">{{ $ASI }}</h2>
                                        <h4 class="card-title mb-2"> ASI
                                        </h4>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex grid-margin stretch-card">
                                <div class="card sale-diffrenceyellow-border">
                                    <a href="{{ url('/hconstablelist') }}" style="text-decoration: none; color: inherit;">

                                    <div class="card-body">
                                        <h2 class="text-dark mb-2 font-weight-bold">{{ $HConstable }}</h2>
                                        <h4 class="card-title mb-2"> H.Constable </h4>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex grid-margin stretch-card">
                                <div class="card sale-diffrencpink-border">
                                    <a href="{{ url('/constabelist') }}" style="text-decoration: none; color: inherit;">

                                    <div class="card-body">
                                        <h2 class="text-dark mb-2 font-weight-bold">{{ $Constable }}</h2>
                                        <h4 class="card-title mb-2">Constable</h4>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h4 class="card-title">Fir </h4>
                                        <canvas id="salesDifference"></canvas>

                                        <p class="mt-3 mb-4 mb-lg-0">To Display Year-wise FIR.
                                        </p>
                                    </div>
                                    {{-- <div class="col-lg-5">
                                        <h4 class="card-title">Police</h4>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <ul class="graphl-legend-rectangle">
                                                    <li><span class="bg-danger"></span>
                                                        <a href="{{ url('/dysplist') }}" style="text-decoration: none; color: inherit;">
                                                            Dysp
                                                        </a>
                                                    </li>

                                                    <li><span class="bg-warning"></span>
                                                        <a href="{{ url('/pilist') }}" style="text-decoration: none; color: inherit;">
                                                            PI
                                                        </a>
                                                    </li>
                                                    <li><span class="bg-info"></span>
                                                        <a href="{{ url('/psilist') }}" style="text-decoration: none; color: inherit;">
                                                            PSI
                                                        </a>
                                                    </li>
                                                    <li><span class="bg-primary"></span>
                                                        <a href="{{ url('/asilist') }}" style="text-decoration: none; color: inherit;">
                                                            ASI
                                                        </a>
                                                    </li>
                                                    <li><span class="bg-info"></span>
                                                        <a href="{{ url('/hconstablelist') }}" style="text-decoration: none; color: inherit;">
                                                            H.Constable
                                                        </a>
                                                    </li>
                                                    <li><span class="bg-success"></span>
                                                        <a href="{{ url('/constabelist') }}" style="text-decoration: none; color: inherit;">
                                                            Constable
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-8 grid-margin">
                                                <canvas id="bestSellers"></canvas>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-4 mb-lg-0">To Analyze position of police
                                        </p>
                                    </div> --}}
                                    <div class="col-lg-5">
                                        <h4 class="card-title">Gender</h4>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="progress progress-lg grouped mb-2">
                                                    <div class="progress-bar  bg-danger" role="progressbar"
                                                        style="width:  <?php echo $Male % 100; ?>%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width:  <?php echo $Female % 100; ?>%" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    {{-- <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 20%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 35%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div> --}}
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <ul class="graphl-legend-rectangle">
                                                    <li><span class="bg-danger"></span>Male {{ $Male }}</li>
                                                    <li><span class="bg-warning"></span>Female {{ $Female ?? '0' }}</li>
                                                    {{-- <li><span class="bg-info"></span>Boys (10%)</li>
                                                    <li><span class="bg-success"></span>Girls (15%)</li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="mb-0 mt-2">To Analyze Male Female PI
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3 mb-lg-0 stretch-card">
                        <div class="card congratulation-bg text-center">
                            <div class="card-body pb-0">
                                <img src="images/dashboard/face29.png" alt="">
                                <h2 class="mt-3 text-white mb-3 font-weight-bold">Congratulations <br>
                                    @php
                                    $ioName = session()->get('IOName');
                                @endphp

                                @if (is_object($ioName) && property_exists($ioName, 'IOName'))
                                    {{ $ioName->IOName }}
                                @else
                                    {{-- Handle the case where $ioName is not an object with an 'IOName' property --}}
                                    {{-- Error: IOName is not an object with an 'IOName' property --}}
                                @endif
                                </h2>
                                <p>You have Solve 57.6% more Case now.
                                    Check your new Complaint in <a href="{{url('personalfirlist')}}"> Click On</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8 flex-column d-flex stretch-card">
                        <div class="row">
                            <div class="col-lg-4 d-flex grid-margin stretch-card">
                                <div class="card sale-visit-statistics-border">
                                    <a href="{{ url('/complaint') }}" style="text-decoration: none; color: inherit;">

                                    <div class="card-body">
                                        <h2 class="text-dark mb-2 font-weight-bold">{{ $Complaint_Mode }}</h2>
                                        <h4 class="card-title mb-2">Complaints</h4>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex grid-margin stretch-card">
                                <div class="card sale-diffrence-border">
                                    <a href="{{ url('/beat') }}" style="text-decoration: none; color: inherit;">

                                    <div class="card-body">
                                        <h2 class="text-dark mb-2 font-weight-bold">{{ $Beat_Name }}</h2>
                                        <h4 class="card-title mb-2">Beat </h4>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex grid-margin stretch-card">
                                <div class="card sale-visit-statistics-border">
                                    <a href="{{ url('/beat') }}" style="text-decoration: none; color: inherit;">

                                    <div class="card-body">
                                        <h2 class="text-dark mb-2 font-weight-bold">{{ $Village_Area_Name }}</h2>
                                        <h4 class="card-title mb-2">Village</h4>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12 grid-margin d-flex stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h4 class="card-title mb-2">FIR</h4>
                                            <div class="dropdown">
                                                <a href="#" class="text-success btn btn-link  px-1"><i
                                                        class="mdi mdi-refresh"></i></a>
                                                {{-- <a href="#"
                                                    class="text-success btn btn-link px-1 dropdown-toggle dropdown-arrow-none"
                                                    data-bs-toggle="dropdown" id="settingsDropdownsales">
                                                    <i class="mdi mdi-dots-horizontal"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                                    aria-labelledby="settingsDropdownsales">
                                                    <a class="dropdown-item">
                                                        <i class="mdi mdi-grease-pencil text-primary"></i>
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item">
                                                        <i class="mdi mdi-delete text-primary"></i>
                                                        Delete
                                                    </a>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div>

                                            <div class="tab-content tab-no-active-fill-tab-content">
                                                <div class="tab-pane fade show active" id="revenue-for-last-month"
                                                    role="tabpanel" aria-labelledby="revenue-for-last-month-tab">
                                                    <div class="d-lg-flex justify-content-between">
                                                        <p class="mb-4">Month-wise in all year</p>
                                                        <div id="revenuechart-legend" class="revenuechart-legend"> </div>
                                                    </div>
                                                    <canvas id="revenue-for-last-month-chart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 flex-column d-flex stretch-card">
                        <div class="row flex-grow">
                            <div class="col-sm-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h3 class="font-weight-bold text-dark">India</h3>
                                                <p class="text-dark">Monday 3.00 PM</p>
                                                <div class="d-lg-flex align-items-baseline mb-3">
                                                    <h1 class="text-dark font-weight-bold">23<sup
                                                            class="font-weight-light"><small>o</small><small
                                                                class="font-weight-medium">c</small></sup></h1>
                                                    <p class="text-muted ms-3">Partly cloudy</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="position-relative">
                                                    <img src="images/dashboard/live.png" class="w-100" alt="">
                                                    <div class="live-info badge badge-success">Live</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 mt-4 mt-lg-0">
                                                <div class="bg-primary text-white px-4 py-4 card">
                                                    <div class="row">
                                                        <div class="col-sm-6 pl-lg-5">
                                                            <h2>63 %</h2>
                                                            <p class="mb-0">FIR Respnce</p>
                                                        </div>
                                                        <div class="col-sm-6 climate-info-border mt-lg-0 mt-2">
                                                            <h2>55 %</h2>
                                                            <p class="mb-0">Police Responce</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row pt-3 mt-md-1">
                                            <div class="col">
                                                <div class="d-flex purchase-detail-legend align-items-center">
                                                    <div id="circleProgress1" class="p-2"></div>
                                                    <div>
                                                        <p class="font-weight-medium text-dark text-small">Sessions</p>
                                                        <h3 class="font-weight-bold text-dark  mb-0">26.80%</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex purchase-detail-legend align-items-center">
                                                    <div id="circleProgress2" class="p-2"></div>
                                                    <div>
                                                        <p class="font-weight-medium text-dark text-small">Users</p>
                                                        <h3 class="font-weight-bold text-dark  mb-0">56.80%</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h4 class="card-title mb-0">Arrested Detail </h4>
                                                    <div class="dropdown">
                                                        <a href="#" class="text-success btn btn-link  px-1"><i
                                                                class="mdi mdi-refresh"></i></a>
                                                        {{-- <a href="#"
                                                            class="text-success btn btn-link px-1 dropdown-toggle dropdown-arrow-none"
                                                            data-bs-toggle="dropdown" id="profileDropdownvisittoday"><i
                                                                class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                                            aria-labelledby="profileDropdownvisittoday">
                                                            <a class="dropdown-item">
                                                                <i class="mdi mdi-grease-pencil text-primary"></i>
                                                                Edit
                                                            </a>
                                                            <a class="dropdown-item">
                                                                <i class="mdi mdi-delete text-primary"></i>
                                                                Delete
                                                            </a>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                                <p class="mt-1">Calculated in all year</p>


                                                <canvas id="visitorsToday"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="row">
                    <div class="col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-success font-weight-bold">18390</h2>
                                    <i class="mdi mdi-account-outline mdi-18px text-dark"></i>
                                </div>
                            </div>
                            <canvas id="newClient"></canvas>
                            <div class="line-chart-row-title">Total Criminal </div>
                        </div>
                    </div>
                    <div class="col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-danger font-weight-bold">839</h2>
                                    <i class="mdi mdi-refresh mdi-18px text-dark"></i>
                                </div>
                            </div>
                            <canvas id="allProducts"></canvas>
                            <div class="line-chart-row-title">Total Warrent</div>
                        </div>
                    </div>
                    <div class="col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-info font-weight-bold">244</h2>
                                    <i class="mdi mdi-file-document-outline mdi-18px text-dark"></i>
                                </div>
                            </div>
                            <canvas id="invoices"></canvas>
                            <div class="line-chart-row-title">Total Suspect</div>
                        </div>
                    </div>
                    <div class="col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-warning font-weight-bold">3259</h2>
                                    <i class="mdi mdi-folder-outline mdi-18px text-dark"></i>
                                </div>
                            </div>
                            <canvas id="projects"></canvas>
                            <div class="line-chart-row-title">Total Witness</div>
                        </div>
                    </div>
                    <div class="col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-secondary font-weight-bold">586</h2>
                                    <i class="mdi mdi-cart-outline mdi-18px text-dark"></i>
                                </div>
                            </div>
                            <canvas id="orderRecieved"></canvas>
                            <div class="line-chart-row-title">Total Victim</div>
                        </div>
                    </div>
                    <div class="col-lg-2 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h2 class="text-dark font-weight-bold">7826</h2>
                                    <i class="mdi mdi-cash text-dark mdi-18px"></i>
                                </div>
                            </div>
                            <canvas id="transactions"></canvas>
                            <div class="line-chart-row-title">Total Evidance</div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="row">
                    <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4 class="card-title">Support Tracker</h4>
                                    <h4 class="text-success font-weight-bold">Tickets<span
                                            class="text-dark ms-3">163</span></h4>
                                </div>
                                <div id="support-tracker-legend" class="support-tracker-legend"></div>
                                <canvas id="supportTracker"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 grid-margin grid-margin-md-0 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-lg-flex align-items-center justify-content-between mb-4">
                                    <h4 class="card-title">Product Orders</h4>
                                    <p class="text-dark">+5.2% vs last 7 days</p>
                                </div>
                                <div class="product-order-wrap padding-reduced">
                                    <div id="productorder-gage" class="gauge productorder-gage"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
<script>
    var yearlyCounts = <?php echo json_encode($yearlyCounts); ?>;
    var DySP = <?php echo json_encode($DySP); ?>;
    var PI = <?php echo json_encode($PI); ?>;
    var PSI = <?php echo json_encode($PSI); ?>;
    var ASI = <?php echo json_encode($ASI); ?>;
    var HConstable = <?php echo json_encode($HConstable); ?>;
    var Constable = <?php echo json_encode($Constable); ?>;
    var Male = <?php echo json_encode($Male); ?>;
    var Female = <?php echo json_encode($Female); ?>;
    var MonthFIRCounts = <?php echo json_encode($MonthFIRCounts); ?>;
    var MonthHeinousCounts = <?php echo json_encode($MonthHeinousCounts); ?>;
    var MonthNonHeinousCounts = <?php echo json_encode($MonthNonHeinousCounts); ?>;
    var ArrestedCounts = <?php echo json_encode($ArrestedCounts); ?>;
    var ArrestedMaleCounts = <?php echo json_encode($ArrestedMaleCounts); ?>;
    var ArrestecFemaleCounts = <?php echo json_encode($ArrestecFemaleCounts); ?>;
</script>
