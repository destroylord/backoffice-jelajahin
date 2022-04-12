@extends('layouts.app', ['title' => 'Restaurant', 'breadcumb' => 'List Restaurant'])

@push('style')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet')}}">
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data List Restaurant</h6>
              </div>
              <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                  <thead class="thead-light">
                    <tr>
                      <th>Name Restaurant</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Restaurant Type</th>
                      <th>Harga Min - Harga Max</th>
                      <th>Address</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name Restaurant</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Restaurant Type</th>
                      <th>Harga Min - Harga Max</th>
                      <th>Address</th>
                    </tr>
                  </tfoot>
                  <tbody>

                  </tbody>

                </table>
              </div>
            </div>
          </div>
    </div>
@endsection

@push('script')
  <!-- Page level plugins -->
  <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <script>
    $(document).ready(function () {
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
@endpush
