@extends('layouts.app', ['title' => 'Hidden Gem', 'breadcumb' => 'Hidden Gem'])

@push('script')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Semua Data Hidden Gem</h6>
            <a href="{{ route('hidden_gem.create')}}" class="btn btn-primary"><i class="far fas fa-plus"></i> Add Hidden Gem</a>
            </div>
            <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                <thead class="thead-light">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>XP Reward</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>XP Reward</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                    @foreach ($hidden_gems as $hidden_gem)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$hidden_gem->name}}</td>
                            <td>{{$hidden_gem->description}}</td>
                            <td>{{$hidden_gem->xp_reward}}</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="far fas fa-info-circle"></i></a>
                                <a href="{{route('hidden_gem.edit', $hidden_gem->id)}}" class="btn btn-warning btn-sm"><i class="far fas fa-edit"></i></a>
                                <a href="/hidden_gem/{{$hidden_gem->id}}/delete" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="far fas fa-trash"></i></a>
                            </td>
                        </tr>
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
