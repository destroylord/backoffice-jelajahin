@extends('layouts.app', ['title' => 'Add Tour', 'breadcumb' => 'Add Tour'])

@section('content')
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">General Form</h6>
                </div>
                <div class="card-body">
                 <form action="" method="POST">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="">Images Tour</label>
                                <input type="file" class="form-control" id="" aria-describedby="" placeholder="Enter name tour">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <label for="">Name Tour</label>
                                <input type="text" class="form-control" id="" aria-describedby=""       placeholder="Enter name tour">
                            </div>
                            <div class="form-group">
                                <label for="">Descriptions</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Enter descriptions"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Ticket</label>
                                <p>Rp.50.000,00</p>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Wisata</label>
                                <select class="form-control mb-3">
                                    <option>Default select</option>
                                </select>
                            </div>
                        </div>
                    </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Maps</h6>
                </div>
                <div class="card-body">
                 <form action="" method="POST">
                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6">
                            {{-- Coty --}}
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Province</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Province</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Province</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">1</option>
                                            <option value="">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            {{-- dot place --}}
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Langtitude</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <label>Longtitude</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            {{-- Address --}}
                            <div class="row mb-4">
                                <div class="col-lg-12">
                                    <label>Address</label>
                                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                    </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
@endsection
