@extends('layouts.app', ['title' => 'Profile', 'breadcumb' => 'Profile'])

@section('content')
    <div class="row mb-3">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Basic</h6>
                </div>
                <div class="card-body">
                  <form action="{{ route('profile.update')}}" method="POST" autocomplete="off">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ Auth::user()->email}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="examplename">Name</label>
                        <input type="text" value="{{Auth::user()->name}}" name="name" class="form-control @error('name') is-invalid @enderror">

                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                          </div>
                        @enderror

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>
              </div>
        </div>
    </div>
@endsection
