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
              @foreach ($data as $key=>$value) 
              <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->created_at }}</td>
                <td><span class="badge badge-success">{{ $value->updated_at }}</span></td>
                <td>
                  <form action="{{ url('category-events' .$value->id) }}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger btn-sm" value="DELETE">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer"></div>
      </div>
    </div>
  </div>


@endsection