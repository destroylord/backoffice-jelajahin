@extends('layouts.app', ['title' => 'Review', 'breadcumb' => 'Review'])

@section('content')
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h2>Mari kita Review</h2>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Photo</label>
                        <br>
                        @php
                            $uri = "https://api.jelajahin.com/";
                        @endphp
                        <img src="{{ ($uri.$host->image != null) ? $uri.$host->image : asset('/img/no_image.jpg ')}}" alt="Avatar.jgp" width="150" height="150">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" value="{{ $host->full_name }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" value="{{ $host->email }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Headline</label>
                        <input type="text" class="form-control" value="{{ $host->headline }}" readonly>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="" id="" rows="10" cols="30" style="line-height: 1.5" class="form-control" readonly>{{ $host->description}}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" name="" id="" class="form-control" readonly value="{{ $host->phone}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control" readonly >{{ $host->address}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('host.update.acc', $host->id )}}" class="btn btn-success btn-sm" name="isAcc">Terima</a>
                    <a href="{{ route('host.update.reject', $host->id )}}" onclick="return confirm('Apakah Anda yakin ingin?')" name="isReject" class="btn btn-danger btn-sm">Tolak</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

  @endpush
