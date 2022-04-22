<div class="card-body">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="" value="{{ $tour->name ?? old('name') }}" name="name" placeholder="Enter name...">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
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
                <input type="number" class="form-control" name="longtitude" value="{{$tour->longtitude ?? ''}}" placeholder="Longtitude" id="longtitude" readonly>
                @error('longtitude')
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
        <label for="">Category</label>
        <input type="number" name="category" class="form-control @error('category') is-invalid @enderror" value="{{$tour->category ?? old('category') }}" placeholder="089xxxx">
        @error('category')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-4">{{$submit ?? 'Update'}}</button>
</div>