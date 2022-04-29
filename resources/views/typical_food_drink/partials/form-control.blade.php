<div class="row">
    <div class="col-lg-5">
        <div class="form-group">
            <img id="blah" src="#" value="{{asset($typical_food_drink->image ?? old('image'))}}" alt="your image" width="50%" height="auto" />
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
            <label for="">Typical Food</label>
            <select name="typical_food" id=""class="form-control @error('typical_food') is-invalid @enderror">
                <option value="" readonly>Select Your Typical Food</option>
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
        @error('typical_food')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Typical Drink</label>
            <select name="typical_drink" id="" class="form-control @error('typical_drink') is-invalid @enderror">
                <option value="">Select Your Typical Drink</option>
                <option value="Cafe">Cafe</option>
                <option value="fast-food">Fast Food</option>
            </select>
            @error('typical_drink')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-group">
            <label for="">Name Typical Food Drink</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $typical_food_drink->name ?? old('name') }}" name="name" id="" aria-describedby="" placeholder="Enter Name Typical Food Drink">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ $typical_food_drink->description ?? old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Origin</label>
            <input type="url" class="form-control @error('origin') is-invalid @enderror" value="{{ $typical_food_drink->origin ?? old('origin')}}" name="origin" placeholder="Enter Your Origin">
            @error('origin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
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
        <button type="submit" class="btn btn-primary w-100">{{ $submit ?? 'Update'}}</button>
    </div>
</div>
</div>
