@extends('layouts.app')

@section('content')
    <!-- Form Category -->
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Form Category</h6>
        </div>
        <div class="card-body">
          <form action="{{ route('categoryEvent.create') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
              <label for="exampleInputEmail1">Masukkan Nama Kategori</label>
              <input type="text" name="name" class="form-control" id="category" aria-describedby="emailHelp"
                placeholder="Enter category">
            </div>
            <div class="form-group">
            </div>
            <button type="submit" class="btn btn-primary"><a href=""></a> Submit</button>
          </form>
        </div>
      </div>

      <!-- List -->
      <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Tables List Category</h6>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th>No.</th>
                <th>Name Category</th>
                <th>Create At</th>
                <th>Update At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href=""></a></td>
                <td>Udin Wayang</td>
                <td>Nasi Padang</td>
                <td><span class="badge badge-success">Delivered</span></td>
                <td>
                  <a href="#" class="btn btn-sm btn-primary">Edit</a>
                  <form action="/category-events"></form>
                  <a href="#" class="btn btn-sm btn-primary">Delete</a>
                </td>
              </tr>
              <tr>
                <td><a href="#">RA5324</a></td>
                <td>Jaenab Bajigur</td>
                <td>Gundam 90' Edition</td>
                <td><span class="badge badge-warning">Shipping</span></td>
                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
              </tr>
              <tr>
                <td><a href="#">RA8568</a></td>
                <td>Rivat Mahesa</td>
                <td>Oblong T-Shirt</td>
                <td><span class="badge badge-danger">Pending</span></td>
                <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer"></div>
      </div>
    </div>
  </div>


@endsection