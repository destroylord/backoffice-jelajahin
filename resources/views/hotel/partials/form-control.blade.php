
<div class="card-body">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="" name="name" placeholder="Enter name...">
    </div>
    <div class="form-group">
        <textarea name="description" id="" cols="30" rows="10" class="form-control">Enter Description</textarea>
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
                <input type="text" name="latitude" class="form-control" placeholder="Latitude" id="latitude">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Longtitude</label>
                <input type="text" class="form-control" name="longtitude" placeholder="Longtitude" id="longtitude">
            </div>
        </div>
    </div>

    <label>Permalink: <a class="generated-url" href="" target="_blank"></a></label>
    <input type="button" class="btn btn-success float-right" id="generateLink" value="Generate Link"></input>
    <div class="form-group">
        <label>Address</label>
        <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
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
        <img id="blah" src="#" alt="your image" width="100%" height="auto" />
    </div>
    <div class="form-group">
    <div class="custom-file">
        <input type="file" accept="image/*" name="image" class="custom-file-input" id="imgInp">
        <label class="custom-file-label" for="customFile">Pilih gambar</label>
    </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Min Price</label>
                <input type="number" name="price_min" class="form-control" id="" placeholder="ex:1000">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Max Price</label>
                <input type="number" class="form-control" name="price_max" id="" placeholder="ex:1000">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="">Phone</label>
        <input type="number" name="phone" class="form-control" placeholder="089xxxx">
    </div>
    <div class="form-group">
        <label for="">Website</label>
        <input type="url" class="form-control" name="website" placeholder="https://example.com">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" placeholder="john@jelajahin.com">
    </div>
    <button type="submit" class="btn btn-primary w-100 mt-4">Submit</button>
</div>
