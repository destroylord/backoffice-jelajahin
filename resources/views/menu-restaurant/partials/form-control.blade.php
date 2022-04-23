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
    <div class="form-group">
        <label for="">Restaurant</label>
        <select name="uuid_restaurant" id="" class="form-control">
            @foreach ($restaurants as $restaurant)
                <option value="{{$restaurant->uuid_menu}}">{{$restaurant->name}}</option>
            @endforeach
        </select>
        @error('uuid_restaurant')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Photo</label>
        <input type="file" class="form-control @error('image') is-invalid @enderror" id="" value="{{ $hotel->image ?? old('image') }}" name="image">
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="" value="{{ $hotel->price ?? old('price') }}" name="price">
        @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Category</label>
        <select name="category" id=""class="form-control @error('category') is-invalid @enderror">
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

    <div class="form-group">
        <button class="btn btn-primary w-100">{{$submit ?? 'Update'}}</button>
    </div>
</div>
</div>
</div>

