@extends('layouts.app')
@section('content')

<div class="row mb-3">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Restaurant</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countRestaurant}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  {{-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                  <span>Since last month</span> --}}
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-utensils fa-2x text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Hotel</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countHotel}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  {{-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                  <span>Since last years</span> --}}
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-hotel fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- New User Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Pending Host</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $countPendingHost}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  {{-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                  <span>Since last month</span> --}}
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-circle-notch fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Pending Experience</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $countPendingExperience}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  {{-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                  <span>Since yesterday</span> --}}
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-circle-notch fa-2x text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection
