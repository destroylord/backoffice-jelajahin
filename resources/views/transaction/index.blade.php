@extends('layouts.app', ['title' => 'Transaction Confirmation', 'breadcumb' => 'Transaction Confirmation'])

@push('script')
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Transaction Confirmation</h6>
            {{-- <a href="{{ route('tour.create')}}" class="btn btn-primary"><i class="far fas fa-plus"></i> Add Wisata</a> --}}
            </div>
            <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                <thead class="thead-light">
                <tr>
                    <th>No.</th>
                    <th>Images</th>
                    <th>Jumlah turis</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Images</th>
                    <th>Jumlah turis</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                    @foreach ($transactionConfirms as $tf)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="https://api.jelajahin.com/{{$tf->image}}" width="200" alt=""></td>
                            <td>{{$tf->tourist_amount}}</td>
                            <td>
                                <button class="btn btn-sm btn-{{ ($tf->status == 1) ? 'success' : (($tf->status == 2 ) ? 'warning' : 'danger') }} '">{{ ($tf->status == 1) ? 'Accepted' : (($tf->status == 2 ) ? 'Pending' : 'Reject') }} </button>
                            </td>
                            <td>

                                    @php
                                        if ($tf->status == 1) {
                                            echo "<i class='fas fa-solid fa-check'></i>";

                                        }elseif ($tf->status == 2) { @endphp

                                            <a href="{{ route('tf.review', $tf->id)}}" class="btn btn-info"><i class="fa fas fa-eye"></i> Review</a>


                                        @php
                                        }else{
                                            echo "<i class='fas fa-times'></i>";
                                        }
                                    @endphp
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
