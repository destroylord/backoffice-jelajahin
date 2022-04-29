@extends('layouts.app', ['title' => 'Add Typical Food & Drink', 'breadcumb' => 'Add Typical Food & Drink'])

@push('style')
    <style>
    #map {
        width: 100%;
        height: 400px;
    }
    </style>

@endpush
@section('content')
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">General Form Typical Food & Drink</h6>
            </div>
                <div class="card-body">
                 <form action="{{ route('typical_food_drink.update', $typical_food_drink->uuid_typical)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    @method('PUT')
                    @include('typical_food_drink.partials.form-control')
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


        // Get City
        $('select[name="province_id"]').on('change', function(){

            var province_id = $(this).val();

            uri = "{{url('/getcity/')}}/"+province_id;

            $.ajax({
                url : uri,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    $('select[name="city_id"]').empty();
                    $.each(data.data, function(key, value){
                        // console.log(data);
                        $('select[name="city_id"]').append('<option value="'+value.id+'">'+value.name+'</option>')

                    })
                }
            })
        });
    </script>
@endpush
