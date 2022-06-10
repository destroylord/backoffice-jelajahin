@extends('layouts.app', ['title' => 'Approval Host', 'breadcumb' => 'Approval Host'])

@push('script')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Approval Host</h6>
            {{-- <a href="{{ route('host.create')}}" class="btn btn-primary"><i class="far fas fa-plus"></i> Approval Host</a> --}}
            </div>
            <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                <thead class="thead-light">
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hosts as $host)
                    <a href="javascript:void(0)">
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$host->full_name}}</td>
                            <td>{{$host->email}}</td>
                            <td>{{$host->phone}}</td>
                            <td>
                                <button class="btn btn-sm btn-{{ ($host->status == 1) ? 'success' : (($host->status == 2 ) ? 'warning' : 'danger') }} '">{{ ($host->status == 1) ? 'accepted' : (($host->status == 2 ) ? 'Pending' : 'reject') }} </button>
                            </td>
                            <td>
                                @php
                                    if ($host->status == 1) {
                                        echo "<i class='fas fa-solid fa-check'></i>";

                                    }elseif ($host->status == 2) { @endphp

                                            <a href="{{ route('host.update.acc', $host->id )}}" class="btn btn-success btn-sm" name="isAcc">Terima</a>
                                            <a href="{{ route('host.update.reject', $host->id )}}" onclick="return confirm('Apakah Anda yakin ingin?')" name="isReject" class="btn btn-danger btn-sm">Tolak</a>

                                    @php
                                    }else{
                                        echo "<i class='fas fa-times'></i>";
                                    }
                                @endphp

                            </td>
                        </tr>
                        </a>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
@endsection

@push('script')
      <!-- Page level plugins -->
  <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
  @endpush
