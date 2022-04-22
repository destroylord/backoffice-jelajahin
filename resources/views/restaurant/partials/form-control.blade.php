<div class="row">
    <div class="col-lg-5">
        <div class="form-group">
            <img id="blah" src="#" value="{{asset($restaurant->image ?? old('image'))}}" alt="your image" width="50%" height="auto" />
        </div>
        <div class="form-group">
        <div class="custom-file">
            <input type="file" accept="image/*" name="image" class="custom-file-input" id="imgInp">
            <label class="custom-file-label" for="customFile">Pilih gambar</label>
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>
        <div class="form-group">
            <label for="">Food Type</label>
            <select name="food_type" id=""class="form-control @error('food_type') is-invalid @enderror">
                <option value="" readonly>Select Your Food Type</option>
                <option value="western">Western</option>
                <option value="asian">Asian</option>
                <option value="thai">Thai</option>
                <option value="vietnamese">Vietnamese</option>
                <option value="padang">Padang</option>
                <option value="arabic">Arabic</option>
                <option value="chinese">Chinese</option>
                <option value="italian">Italian</option>
                <option value="international">International</option>
                <option value="japanese">Japanese</option>
                <option value="indonesian">Indonesian</option>
                <option value="soups">Soups</option>
                <option value="grills">Grills</option>
                <option value="spicy">Spicy</option>
                <option value="pizza">Pizza</option>
                <option value="fast-food">Fast Food</option>
                <option value="vegetarian">Vegetarian</option>
                <option value="sea-food">Sea Food</option>
                <option value="non-halal">Non-Halal</option>
            </select>
        </div>
        @error('food_type')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Restaurant Type</label>
            <select name="restaurant_type" id="" class="form-control @error('restaurant_type') is-invalid @enderror">
                <option value="">Select Your Restaurant Type</option>
                <option value="Cafe">Cafe</option>
                <option value="fast-food">Fast Food</option>
            </select>
            @error('restaurant_type')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-group">
            <label for="">Name Restaurant</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $restaurant->name ?? old('name') }}" name="name" id="" aria-describedby="" placeholder="Enter Name Restaurant">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ $restaurant->description ?? old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Website</label>
            <input type="url" class="form-control @error('website') is-invalid @enderror" value="{{ $restaurant->website ?? old('website')}}" name="website" placeholder="Enter url website...">
            @error('website')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="number" class="form-control @error('phone') is-invalid @enderror" value="{{$restaurant->phone ?? old('phone')}}" name="phone" placeholder="Enter Phone...">
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Harga minimal</label>
                    <input type="number" name="price_min" value="{{$restaurant->price_min ?? old('price_min')}}" class="form-control @error('price_min') is-invalid @enderror">
                    @error('price_min')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Harga Maximal</label>
                    <input type="number" name="price_max" value="{{$restaurant->price_max ?? old('price_max')}}" class="form-control @error('price_max') is-invalid @enderror">
                    @error('price_max')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Jam buka</label>
                    <input type="time" name="start_time" value="{{ $restaurant->start_time ?? old('start_time')}}" class="form-control @error('start_time') is-invalid @enderror">
                    @error('start_time')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Jam Tutup</label>
                    <input type="time" name="end_time" value="{{$restaurant->end_time ?? old('end_time')}}" class="form-control @error('end_time') is-invalid @enderror">
                    @error('close_time')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Open</label>
                    <input type="time" value="{{$restaurant->business_open ?? old('business_open')}}" name="business_open" class="form-control @error('business_open') is-invalid @enderror">
                    @error('business_open')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Close</label>
                    <input type="time" value="{{$restaurant->business_close ?? old('business_close')}}" name="business_close" class="form-control @error('business_close') is-invalid @enderror">
                    @error('business_close')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
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
<div class="row">
    <div class="col-lg-6">
        <div id="map"></div>
    </div>
    <div class="col-lg-6">
        {{-- Coty --}}
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Province</label>
                    <select name="province_id" id="province_id" class="form-control @error('province_id') is-invalid @enderror">
                        <option value="">Select Your City</option>
                        @foreach ($provinces as $province)
                            <option value="{{$province->id}}">{{ $province->name}}</option>
                        @endforeach
                    </select>
                    @error('province_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>City</label>
                    <select name="city_id" id="city_id" class="form-control @error('city_id') is-invalid @enderror">
                        <option value="">Select Your City</option>
                    </select>
                    @error('city_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        {{-- dot place --}}
        <div class="row">
            <div class="col-lg-6">
                <label>Latitude</label>
                <input type="number" name="latitude" value="{{$restaurant->latitude ?? old('latitude')}}" class="form-control @error('latitude') is-invalid @enderror" placeholder="Latitude" id="latitude" readonly>
                @error('latitude')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Longtitude</label>
                <input type="number" class="form-control @error('longtitude') is-invalid @enderror" name="longtitude" value="{{$restaurant->longtitude ?? old('longtitude')}}" placeholder="Longtitude" id="longtitude" readonly>
                @error('longtitude')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Address --}}
        <div class="row mb-4 mt-2">
            <div class="col-lg-12">
                <label>Address</label>
                <textarea name="address" id="" cols="30" rows="10" class="form-control @error('address') is-invalid @enderror">{{$restaurant->address ?? old('address')}}</textarea>
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">{{ $submit ?? 'Update'}}</button>
    </div>
</div>
</div>
