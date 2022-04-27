<div class="card-body">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="" value="{{ $tour->name ?? old('name') }}" name="name" placeholder="Enter name...">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{$tour->description ?? old('description')}}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <h6 class="mt-4 py-3 font-weight-bold text-primary">Location</h6>

    <div class="form-group">
        <label>Maps</label>
        <div id="map"></div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Latitude</label>
                <input type="number" name="latitude" value="{{$tour->latitude ?? ''}}" class="form-control" placeholder="Latitude" id="latitude" readonly>
                @error('latitude')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Longtitude</label>
                <input type="number" class="form-control" name="longitude" value="{{$tour->longitude ?? ''}}" placeholder="Longtitude" id="longtitude" readonly>
                @error('longitude')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <label>Permalink: <a class="generated-url" href="" target="_blank"></a></label>
    <input type="button" class="btn btn-success float-right" id="generateLink" value="Generate Link"></input>
    <div class="form-group">
        <label>Address</label>
        <textarea name="address" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{$tour->address ?? old('address')}}</textarea>
        @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label>Province</label>
        <select name="province_id" id="province_id" class="form-control">
            <option value="">Select Your City</option>
            @foreach ($provinces as $province)
                <option value="{{$province->id}}">{{ $province->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>City</label>
        <select name="city_id" id="city_id" class="form-control">
            <option value="">Select Your City</option>
        </select>
    </div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="card mb-4">
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
<h6 class="m-0 font-weight-bold text-primary">General</h6>
</div>
<div class="card-body">
    <div class="form-group">
        <img id="blah" src="{{ asset($tour->image ?? '')  }}" alt="your image" width="100%" height="auto" />
    </div>
    <div class="form-group">
    <div class="custom-file">
        <input type="file" accept="image/*" name="image" class="custom-file-input" id="imgInp" value="{{$tour->image ?? old('image')}}">
        <label class="custom-file-label" for="customFile">Pilih gambar</label>
        @error('image')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Harga Tiket Weekday</label>
                <input type="number" name="ticket_price_weekday" class="form-control @error('ticket_price_weekday') is-invalid @enderror" id="" value="{{$tour->ticket_price_weekday ?? old('ticket_price_weekday')}}" placeholder="ex:1000">
                @error('ticket_price_weekday')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Harga Tiket Weekend</label>
                <input type="number" class="form-control @error('ticket_price_weekend') is-invalid @enderror" name="ticket_price_weekend" value="{{$tour->ticket_price_weekend ?? old('ticket_price_weekend')}}" id="" placeholder="ex:1000">
                @error('ticket_price_weekend')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control @error('category') is-invalid @enderror">
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
    @error('category')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary w-100 mt-4">{{$submit ?? 'Update'}}</button>
</div>
