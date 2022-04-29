<div class="row">
    <div class="col-lg-7">
        <div class="form-group">
            <label for="">Name Hidden Gem</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $hidden_gem->name ?? old('name') }}" name="name" id="" placeholder="Enter Name Hidden Gem">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Photo</label>
                <input type="file" accept="image/*" name="image" class="form-control @error('image') is-invalid @enderror" value="{{$hidden_gem->image ?? old('image')}}">
                @error('image')
                   <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="form-group">
            <label for="">XP Reward</label>
            <input type="number" class="form-control @error('xp_reward') is-invalid @enderror" value="{{ $hidden_gem->xp_reward ?? old('xp_reward') }}" name="xp_reward" id="">
            @error('xp_reward')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ $hidden_gem->description ?? old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
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
                <input type="number" name="latitude" value="{{$hidden_gem->latitude ?? old('latitude')}}" class="form-control @error('latitude') is-invalid @enderror" placeholder="Latitude" id="latitude" readonly>
                @error('latitude')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-lg-6">
                <label>Longitude</label>
                <input type="number" class="form-control @error('longitude') is-invalid @enderror" name="longitude" value="{{$hidden_gem->longitude ?? old('longitude')}}" placeholder="Longitude" id="longtitude" readonly>
                @error('longitude')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Address --}}
        <div class="row mb-4 mt-2">
            <div class="col-lg-12">
                <label>Address</label>
                <textarea name="address" id="" cols="30" rows="10" class="form-control @error('address') is-invalid @enderror">{{$hidden_gem->address ?? old('address')}}</textarea>
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100">{{ $submit ?? 'Update'}}</button>
    </div>
</div>
</div>
