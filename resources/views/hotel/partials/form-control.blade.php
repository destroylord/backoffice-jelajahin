
<div class="card-body">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="" value="{{ $hotel->name ?? old('name') }}" name="name" placeholder="Enter name...">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{$hotel->description ?? old('description')}}</textarea>
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

    <label>Permalink: <a class="generated-url" href="" target="_blank"></a></label>
    <input type="button" class="btn btn-success float-right" id="generateLink" value="Generate Link"></input>
    <div class="form-group">
        <label>Address</label>
        <textarea name="address" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{$hotel->address ?? old('address')}}</textarea>
        @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
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
        <img id="blah" src="{{ asset($hotel->image ?? '')  }}" alt="your image" width="100%" height="auto" />
    </div>
    <div class="form-group">
    <div class="custom-file">
        <input type="file" accept="image/*" name="image" class="custom-file-input" id="imgInp" value="{{$hotel->image ?? old('image')}}">
        <label class="custom-file-label" for="customFile">Pilih gambar</label>
        @error('image')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Min Price</label>
                <input type="number" name="price_min" class="form-control @error('price_min') is-invalid @enderror" id="" value="{{$hotel->price_min ?? old('price_min')}}" placeholder="ex:1000">
                @error('price_min')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Max Price</label>
                <input type="number" class="form-control @error('price_max') is-invalid @enderror" name="price_max" value="{{$hotel->price_max ?? old('price_max')}}" id="" placeholder="ex:1000">
                @error('price_max')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="">Phone</label>
        <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$hotel->phone ?? old('phone') }}" placeholder="089xxxx">
        @error('phone')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Website</label>
        <input type="url" class="form-control @error('website') is-invalid @enderror" name="website" value="{{$hotel->website ?? old('website')}}" placeholder="https://example.com">
        @error('website')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$hotel->email ?? old('email')}}" placeholder="john@jelajahin.com">
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-4">{{$submit ?? 'Update'}}</button>
</div>
