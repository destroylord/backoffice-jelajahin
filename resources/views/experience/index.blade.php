@extends('layouts.app', ['title' => 'Approval experience', 'breadcumb' => 'Approval experience'])

@push('script')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Approval experience</h6>
            </div>
            <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                <thead class="thead-light">
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Duration</th>
                        <th>accepted</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($experiences as $experience)
                    <a href="javascript:void(0)">
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$experience->name}}</td>
                            <td>{{$experience->price}}</td>
                            <td>{{$experience->duration}}</td>
                            <td>
                                <button class="btn btn-sm btn-{{ ($experience->accepted == 1) ? 'success' : (($experience->accepted == 2 ) ? 'warning' : 'danger') }} '">{{ ($experience->accepted == 1) ? 'accepted' : (($experience->accepted == 2 ) ? 'Pending' : 'reject') }} </button>
                            </td>
                            <td>
                                @php
                                    if ($experience->accepted == 1) {
                                        echo "<i class='fas fa-solid fa-check'></i>";

                                    }elseif ($experience->accepted == 2) { @endphp

                                            <a href="{{ route('experience.update.acc', $experience->id )}}" class="btn btn-success btn-sm" name="isAcc">Terima</a>
                                            <a href="{{ route('experience.update.reject', $experience->id )}}" onclick="return confirm('Apakah Anda yakin ingin?')" name="isReject" class="btn btn-danger btn-sm">Tolak</a>

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
