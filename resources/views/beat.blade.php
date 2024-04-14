@extends('header_footer_layout.main');
@section('main-container')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
             
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Complaint Table</h4>
                                
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                             <tr>
                                                <th>
                                                    sr.no
                                                </th>
                                                <th>
                                                    UnitName
                                                </th>
                                                <th>
                                                    Beat_Name
                                                </th>
                                                <th>
                                                    Village_Area_Name
                                                </th>
                                                <th>
                                                    View
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Complaint_Mode as $Dyspname)
                                                <tr>
                                                    <td >
                                                        {{ $loop->iteration }}                                                    </td>
                                                    <td>
                                                        {{ $Dyspname->UnitName }}
                                                    </td>
                                                    <td>
                                                        {{ $Dyspname->Beat_Name }}
                                                    </td>
                                                    <td>
                                                        {{ $Dyspname->Village_Area_Name }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('/information/'.$Dyspname->id) }}"
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



                </div>>
            </div>
        </div>
    </div>
@endsection
{{-- <script>
    var maledysp = <?php echo json_encode($dyspcountmale); ?>;
    var femaledysp = <?php echo json_encode($dyspcountfemale); ?>;
</script> --}}