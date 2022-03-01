@extends('layouts.app')

@section('content')
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


@endsection