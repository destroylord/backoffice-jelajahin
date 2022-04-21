@extends('layouts.app', ['title' => 'Add Wisata', 'breadcumb' => 'Add Wisata'])
@push('style')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <style>
    #map {
        width: 100%;
        height: 400px;
    }
    </style>
   <!-- Load Leaflet from CDN -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>

@endpush
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
                            <div class="form-group">
                                <label>Maps</label>
                                <div id="map"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Latitude</label>
                                        <input type="number" name="latitude" value="{{$hotel->latitude ?? ''}}" class="form-control" placeholder="Latitude" id="latitude" readonly>
                                        @error('latitude')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Longtitude</label>
                                        <input type="number" class="form-control" name="longtitude" value="{{$hotel->longtitude ?? ''}}" placeholder="Longtitude" id="longtitude" readonly>
                                        @error('longtitude')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


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

@push('script')
    <script type="text/javascript">
        // Images Preview
        // Maps
        var curLocation = [0,0];
        if (curLocation[0]==0 && curLocation[1]==0) {
            curLocation = [51.505, -0.09];
        }
       var map = L.map('map').setView([51.505, -0.09], 16);
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        map.attributionControl.setPrefix(false);
        var marker  = new L.marker(curLocation,{
            draggable: 'true'
        });
        console.log(marker);
        marker.on('dragend', function(event){
            var position = marker.getLatLng();
            marker.setLatLng(position, {
                draggable: 'true'
            })
            .bindPopup(position).update();
            $('#latitude').val(position.lat);
            $('#longtitude').val(position.lng).keyup();
        })
        $('#latitude, #longtitude').change(function(){
            var position = [parseInt($("#latitude").val()), parseInt($("#longtitude").val())]
            marker.setLatLng(position, {
                draggable: 'true',
            }).bindPopup(position).update();
            map.panTo(position)
        })
        map.addLayer(marker)
        // Generate Url
        $("#generateLink").click(function(){
            const lat = $('#latitude').val();
            const long = $('#longtitude').val();
            const uri = `https://www.google.com/maps/@${lat},${long},16z`
            var maintext = "GoMaps." + lat + "/" + long +",16z";
            var siteurl = maintext.trim()
            $('.generated-url').text(siteurl).attr("href", uri);
        });
    </script>
@endpush
