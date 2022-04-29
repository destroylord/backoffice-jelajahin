<div class="row">
    <div class="col-lg-5">
        <div class="form-group">
            <img id="blah" src="#" value="{{asset($activity->image ?? old('image'))}}" alt="your image" width="50%" height="auto" />
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
            <label for="">Category</label>
            <select name="category" id=""class="form-control @error('category') is-invalid @enderror">
                <option value="" readonly>Select Your Category</option>
                <option value="taman">Taman</option>
                <option value="asian">Asian</option>
                <option value="thai">Thai</option>
                <option value="vietnamese">Vietnamese</option>
                <option value="padang">Padang</option>
            </select>
        </div>
        @error('category')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-lg-7">
        <div class="form-group">
            <label for="">Name Activity</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $activity->name ?? old('name') }}" name="name" id="" aria-describedby="" placeholder="Enter Name Activity">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ $activity->description ?? old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Harga minimal</label>
                    <input type="number" name="price_min" value="{{$activity->price_min ?? old('price_min')}}" class="form-control @error('price_min') is-invalid @enderror">
                    @error('price_min')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Harga Maximal</label>
                    <input type="number" name="price_max" value="{{$activity->price_max ?? old('price_max')}}" class="form-control @error('price_max') is-invalid @enderror">
                    @error('price_max')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        {{-- <div class="row">
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
        </div> --}}
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
                <input type="number" name="latitude" value="{{$activity->latitude ?? old('latitude')}}" class="form-control @error('latitude') is-invalid @enderror" placeholder="Latitude" id="latitude" readonly>
                @error('latitude')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Longtitude</label>
                <input type="number" class="form-control @error('longtitude') is-invalid @enderror" name="longtitude" value="{{$activity->longtitude ?? old('longtitude')}}" placeholder="Longtitude" id="longtitude" readonly>
                @error('longtitude')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Address --}}
        <div class="row mb-4 mt-2">
            <div class="col-lg-12">
                <label>Address</label>
                <textarea name="address" id="" cols="30" rows="10" class="form-control @error('address') is-invalid @enderror">{{$activity->address ?? old('address')}}</textarea>
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">{{ $submit ?? 'Update'}}</button>
    </div>
</div>
</div>
