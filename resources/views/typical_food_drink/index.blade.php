@extends('layouts.app', ['title' => 'Typical Food & Drink', 'breadcumb' => 'Typical Food & Drink'])

@push('script')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Semua Data Typical Food & Drink</h6>
            <a href="{{ route('typical_food_drink.create')}}" class="btn btn-primary"><i class="far fas fa-plus"></i> Add Typical Food & Drink</a>
            </div>
            <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                <thead class="thead-light">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Origin</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Origin</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                    @foreach ($typical_food_drinks as $typical_food_drink)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$typical_food_drink->name}}</td>
                            <td>{{$typical_food_drink->description}}</td>
                            <td>{{$typical_food_drink->origin}}</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="far fas fa-info-circle"></i></a>
                                <a href="{{route('typical_food_drink.edit', $typical_food_drink->uuid_typical)}}" class="btn btn-warning btn-sm"><i class="far fas fa-edit"></i></a>
                                <a href="/typical_food_drink/{{$typical_food_drink->uuid_typical}}/delete" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="far fas fa-trash"></i></a>
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
