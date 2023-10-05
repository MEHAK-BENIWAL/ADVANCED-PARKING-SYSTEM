<x-master-layout :sidebar="$sidebar">

  @php
  $categories =  \Illuminate\Support\Facades\DB::table('categories')
            ->selectRaw('count(id) as total')
            ->get();
  $slots =  \Illuminate\Support\Facades\DB::table('slots')
            ->selectRaw('count(id) as total')
            ->get();  
  $bookings =  \Illuminate\Support\Facades\DB::table('bookings')
            ->selectRaw('count(id) as total')
            ->get();             
@endphp

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-2 mb-4">
        <div class="card bg-gradient-success">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-white text-capitalize font-weight-bold">Bookings</p>
                  <h5 class="font-weight-bolder mb-0 text-dark">
                    {{$bookings[0]->total}}
                    {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-icon shadow text-center border-radius-md d-flex justify-content-center align-items-center">
                  <img src="https://cdn-icons-png.flaticon.com/512/996/996231.png" width="25px" height="25px" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-2 mb-4">
        <div class="card bg-gradient-info">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-white text-capitalize font-weight-bold">Categories</p>
                  <h5 class="font-weight-bolder mb-0 text-dark">
                    {{$categories[0]->total}}
                    {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-icon shadow text-center border-radius-md d-flex justify-content-center align-items-center">
                  <img src="https://cdn-icons-png.flaticon.com/512/3418/3418139.png" width="25px" height="25px" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-2 mb-4">
        <div class="card bg-gradient-warning">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-white text-capitalize font-weight-bold">Slots</p>
                  <h5 class="font-weight-bolder mb-0 text-dark">
                    {{$slots[0]->total}}
                    {{-- <span class="text-success text-sm font-weight-bolder">+55%</span> --}}
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-icon shadow text-center border-radius-md d-flex justify-content-center align-items-center">
                  <img src="https://cdn-icons-png.flaticon.com/512/9835/9835748.png" width="25px" height="25px" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
            
    <x-flash_success>
       {{ __("You're logged in!") }}
    </x-flash_success>


</x-master-layout>

