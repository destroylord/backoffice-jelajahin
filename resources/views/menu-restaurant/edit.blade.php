@extends('layouts.app', ['title' => 'Hotel', 'breadcumb' => 'Hotel'])


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
<div class="row">
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Form Information</h6>
            </div>
            <form action="{{ route('menu-restaurant.update', $menuRestaurant->uuid_menu)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('menu-restaurant.partials.form-control')
            </form>
        </div>
    </div>
</div>
@endsection
@push('script')
    <script type="text/javascript">


        // Images Preview
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }

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
