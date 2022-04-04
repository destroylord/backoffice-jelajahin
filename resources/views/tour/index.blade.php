@extends('layouts.app')

@section('content')
    <!-- Form Tour Wisata -->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Form Wisata Add</h1>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <!-- Select2 -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Silahkan Mengisi Form Ini</h6>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Name</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Masukkan Name Wisata">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Description</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Choose File Image</label>
                        </div>
                      </div>
                  </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Date Picker</h6>
              </div>
              <div class="card-body">
                <p>Simple and easy select a time for a text input using your mouse.</p>
                <div class="form-group" id="simple-date1">
                    <label>Harga Tiket WeekDay</label>
                    <input type="text" class="form-control" placeholder="Masukkan Harga Tiket">
                    <label>Harga Tiket Weekend</label>
                    <input type="text" class="form-control" placeholder="Masukkan Harga Tiket">
                  <label for="simpleDataInput">Best Time</label>
                    <div class="input-group date">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                      </div>
                      <input type="text" class="form-control" value="01/06/2020" id="simpleDataInput">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Row-->

        <div class="row">
            <div class="col-lg-6">
              <!-- Select2 -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Address</h6>
                </div>
                <div class="card-body">        
                  <p>Isi Address</p>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Address</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                      placeholder="Masukkan Name Address">
                  </div>          
                  <div class="form-group">
                    <label for="select2Single">Province</label>
                    <select class="select2-single form-control" name="state" id="select2Single">
                      <option value="">Select</option>
                      <option value="Aceh">Aceh</option>
                      <option value="Sumatra Utara">Sumatra Utara</option>
                      <option value="Sumatra Barat">Sumatra Barat</option>
                      <option value="Riau">Riau</option>
                      <option value="Kepulauan Riau">Kepulauan Riau</option>
                      <option value="Jambi">Jambi</option>
                      <option value="Bengkulu">Bengkulu</option>
                      <option value="Sumatra Selatan">Sumatra Selatan</option>
                      <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                      <option value="Lampung">Lampung</option>
                      <option value="Banten">Banten</option>
                      <option value="Jawa Barat">Jawa Barat</option>
                      <option value="Jakarta">Jakarta</option>
                      <option value="Jawa Tengah">Jawa Tengah</option>
                      <option value="Yogyakarta">Yogyakarta</option>
                      <option value="Jawa TImur">Jawa Timur</option>
                      <option value="Bali">Bali</option>
                      <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                      <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                      <option value="Kalimantan Barat">Kalimantan Barat</option>
                      <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                      <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                      <option value="Kalimantan Timur">Kalimantan Timur</option>
                      <option value="Kalimantan Utara">Kalimantan Utara</option>
                      <option value="Gorontalo">Gorontalo</option>
                      <option value="Sulawaesi Barat">Sulawesi Barat</option>
                      <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                      <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                      <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                      <option value="Sulawesi Utara">Sulawesi Utara</option>
                      <option value="Maluku">Maluku</option>
                      <option value="Maluku Utara">Maluku Utara</option>
                      <option value="Papua Barat">Papua Barat</option>
                      <option value="Papua">Papua</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="select2SinglePlaceholder">City</label>
                    <select class="select2-single-placeholder form-control" name="state" id="select2SinglePlaceholder">
                      <option value="">Select</option>
                      <option value="Aceh">Aceh</option>
                      <option value="Sumatra Utara">Sumatra Utara</option>
                      <option value="Sumatra Barat">Sumatra Barat</option>
                      <option value="Riau">Riau</option>
                      <option value="Kepulauan Riau">Kepulauan Riau</option>
                      <option value="Jambi">Jambi</option>
                      <option value="Bengkulu">Bengkulu</option>
                      <option value="Sumatra Selatan">Sumatra Selatan</option>
                      <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                      <option value="Lampung">Lampung</option>
                      <option value="Banten">Banten</option>
                      <option value="Jawa Barat">Jawa Barat</option>
                      <option value="Jakarta">Jakarta</option>
                      <option value="Jawa Tengah">Jawa Tengah</option>
                      <option value="Yogyakarta">Yogyakarta</option>
                      <option value="Jawa TImur">Jawa Timur</option>
                      <option value="Bali">Bali</option>
                      <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                      <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                      <option value="Kalimantan Barat">Kalimantan Barat</option>
                      <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                      <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                      <option value="Kalimantan Timur">Kalimantan Timur</option>
                      <option value="Kalimantan Utara">Kalimantan Utara</option>
                      <option value="Gorontalo">Gorontalo</option>
                      <option value="Sulawaesi Barat">Sulawesi Barat</option>
                      <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                      <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                      <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                      <option value="Sulawesi Utara">Sulawesi Utara</option>
                      <option value="Maluku">Maluku</option>
                      <option value="Maluku Utara">Maluku Utara</option>
                      <option value="Papua Barat">Papua Barat</option>
                      <option value="Papua">Papua</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Latitude</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                      placeholder="Masukkan Latitude">
                  </div> 
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Longtitude</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                      placeholder="Masukkan Longtitute">
                  </div> 
                </div>
              </div>

        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to logout?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="login.html" class="btn btn-primary">Logout</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>

@endsection

