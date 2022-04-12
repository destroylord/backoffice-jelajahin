@extends('layouts.app', ['title' => 'Add Wisata', 'breadcumb' => 'Add Wisata'])

@section('content')
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">General Form Wisata</h6>
                </div>
                <div class="card-body">
                 <form action="" method="POST">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="">Images Wisata</label>
                                <input type="file" class="form-control" id="" aria-describedby="" placeholder="Enter name wisata">
                            </div>
                            <div class="form-group">
                                <label for="">Best Time</label>
                                <div class="input-group date">
                                    <div class="input-group-prepend">
                                        <span class=""input-group-text><i class="fas fa-calender"></i></span>
                                    </div>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox">
                                    <label for="">Sunset</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox">
                                    <label for="">Sunny</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox">
                                    <label for="">Sunrise</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox">
                                    <label for="">Rainy</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Category</label>
                                <select class="form-control mb-3">
                                    <option>Select Category</option>
                                    <option value="">Gunung</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <label for="">Name Wisata</label>
                                <input type="text" class="form-control" id="" aria-describedby="" placeholder="Enter name wisata">
                            </div>
                            <div class="form-group">
                                <label for="">Descriptions</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Enter descriptions"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Ticket</label>
                                <p>Rp.50.000,00</p>
                            </div>
                            <div>
                                <label for="">Ticket Price WeekDay</label>
                                <input type="text" class="form-control" placeholder="Masukkan Harga Tiket WeekDay">
                                <label for="">Ticket Price Weekend</label>
                                <input type="text" class="form-control" placeholder="Masukkan Harga Tiket WeekDay">
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
                  <h6 class="m-0 font-weight-bold text-primary">Form Location</h6>
                </div>
                <div class="card-body">
                 <form action="" method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                            {{-- Maps --}}
                            <section class="map">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="map">
                                <!-- How to change your own map point
                                    1. Go to Google Maps
                                    2. Click on your location point
                                    3. Click "Share" and choose "Embed map" tab
                                    4. Copy only URL and paste it within the src="" field below
                                -->
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7895.485196115994!2d103.85995441789784!3d1.2880401763270322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fb4e58ad9cd826e!2sSingapore+Flyer!5e0!3m2!1sen!2sth!4v1505825620371" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                        </div>
                        <div class="col-lg-6">
                            {{-- Coty --}}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Province</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Your Province</option>
                                            <option value="Aceh">Aceh</option>
                                            <option value="Sumatra Utara">Sumatra Utara</option>
                                            <option value="Sumatra Barat">Sumatra Barat</option>
                                            <option value="Riau">Riau</option>
                                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                                            <option value="Jambi">Jambi</option>
                                            <option value="Bengkulu">Bengkulu</option>
                                            <option value="Sumatra Selatan">Sumatra Selatan</option>
                                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                            <option value="Lampung">Lampung</option>
                                            <option value="Banten">Banten</option>
                                            <option value="Jawa Barat">Jawa Barat</option>
                                            <option value="Jakarta">Jakarta</option>
                                            <option value="Jawa Tengah">Jawa Tengah</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
                                            <option value="Jawa TImur">Jawa Timur</option>
                                            <option value="Bali">Bali</option>
                                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                                            <option value="Gorontalo">Gorontalo</option>
                                            <option value="Sulawaesi Barat">Sulawesi Barat</option>
                                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                                            <option value="Maluku">Maluku</option>
                                            <option value="Maluku Utara">Maluku Utara</option>
                                            <option value="Papua Barat">Papua Barat</option>
                                            <option value="Papua">Papua</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select Your City</option>
                                            <option value="Surabaya">Surabaya</option>
                                            <option value="Probolinggo">Probolinggo</option>
                                            <option value="Bondowoso">Bondowoso</option>
                                            <option value="Solo">Solo</option>
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
                            <div class="row mb-4 mt-2">
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
