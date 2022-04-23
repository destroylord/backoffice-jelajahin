@extends('layouts.app', ['title' => 'Menu Restaurant', 'breadcumb' => 'Menu Restaurant'])

@push('script')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Semua Data Menu Restaurant</h6>
            <a href="{{ route('menu-restaurant.create')}}" class="btn btn-primary"><i class="far fas fa-plus"></i> Add Hotel</a>
            </div>
            <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                <thead class="thead-light">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                    {{-- @foreach ($hotels as $hotel)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$hotel->name}}</td>
                            <td>{{$hotel->description}}</td>
                            <td>{{$hotel->phone}}</td>
                            <td>{{$hotel->email}}</td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm"><i class="far fas fa-info-circle"></i></a>
                                <a href="{{route('hotel.edit', $hotel->uuid_lodging)}}" class="btn btn-warning btn-sm"><i class="far fas fa-edit"></i></a>
                                <a href="/hotel/{{$hotel->uuid_lodging}}/delete" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="far fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach --}}
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
