@extends('header_footer_layout.main');
@section('main-container')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie chart</h4>
                                <canvas id="pieChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dysp Table</h4>
                                <p class="card-description">
                                    <a href="{{ route('asigendermale') }}" style="text-decoration: none; color: inherit;">
                                        <button type="submit" class="btn btn-outline-inverse-info btn-icon-text"
                                            id="nreportDropdown">
                                            Male
                                        </button>
                                    </a>
                                    <a href="{{ route('asigenderfemale') }}" style="text-decoration: none; color: inherit;">
                                        <button type="submit" class="btn btn-outline-inverse-info btn-icon-text"
                                            id="nreportDropdown">
                                            Female
                                        </button>
                                    </a>
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    sr.no
                                                </th>
                                                <th>
                                                    IOName
                                                </th>
                                                <th>
                                                    KGID
                                                </th>
                                                <th>
                                                    Internal_IO
                                                </th>
                                                <th>
                                                    View
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($asilist as $Dyspname)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>

                                                        {{ $Dyspname->IOName }}
                                                    </td>
                                                    <td>
                                                        {{ $Dyspname->KGID }}
                                                    </td>
                                                    <td>
                                                        {{ $Dyspname->Internal_IO }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('/asidash/' . $Dyspname->KGID) }}"
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
<script>
    var maledysp = <?php echo json_encode($dyspcountmale); ?>;
    var femaledysp = <?php echo json_encode($dyspcountfemale); ?>;
</script>
