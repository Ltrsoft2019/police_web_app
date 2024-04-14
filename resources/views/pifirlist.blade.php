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
                                <a class="btn btn-success" href="{{url('/acpdashboard')}}"><i class="mdi mdi-home me-2"></i>Back to
                                    home</a>
                            </div>
                        </div>
                        <div class="row doc-content">
                            <div class="col-12 col-md-10 offset-md-1">
                                <div class="col-12 grid-margin" id="doc-intro">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">FIR List</h4>
                                            <p class="card-description">
                                                Add class <code>.table-striped</code>
                                            </p>
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                FIR
                                                            </th>
                                                            <th>
                                                                Unitname
                                                            </th>
                                                            <th>
                                                                FIR Type
                                                            </th>
                                                            <th>
                                                                FIR Id
                                                            </th>
                                                            <th>
                                                                View
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pilistfir as $Dyspname)
                                                            <tr>
                                                              
                                                                <td>
                                                                    {{ $Dyspname->FIRNo }}
                                                                </td>
                                                                <td>
                                                                    {{ $Dyspname->UnitName }}
                                                                </td>
                                                                <td>
                                                                    {{ $Dyspname->FIR_Type }}
                                                                </td>
                                                                <td>
                                                                    {{ $Dyspname->FIR_ID }}
                                                                </td>
                                                                <td>
                                                                    <a href="{{ url('/information/'.$Dyspname->id ) }}"
                                                                        style="text-decoration: none; color: inherit;">
                                                                        <i class="mdi mdi-eye"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
            
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- partial:../partials/_footer.html -->
                <footer class="footer">
                    <div class="footer-wrap">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
                                    href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com
                                </a>2021</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a
                                    href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a>
                                templates</span>
                        </div>
                    </div>
                </footer>
                <!-- partial -->
            </div>
        </div>
    </div>
</body>

</html>
