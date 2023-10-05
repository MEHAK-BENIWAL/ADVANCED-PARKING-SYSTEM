<aside style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;" class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    @if(Auth::user()->role === "admin")
      <a class="navbar-brand m-0 d-flex justify-content-center align-items-center" href="{{route('/')}}">
        <img src="https://cdn-icons-png.flaticon.com/512/608/608690.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-light text-center">Admin Panel</span>
      </a>
    @else
      <a class="navbar-brand m-0 d-flex justify-content-center align-items-center" href='{{route(Request::segment(2).".dashboard")}}'>
        <img src="https://cdn-icons-png.flaticon.com/512/608/608690.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-capitalize text-light text-center">{{ Request::segment(2) }} Panel</span>
      </a>
    @endif
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
    @if(Auth::user()->role === "admin")
      <li class="nav-item">
        @if(trim($_SERVER['REQUEST_URI'],'/') == 'parking/dashboard')
        <a class="nav-link active" href="{{route('/')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/9823/9823663.png" width="20px" height="20px" alt="shop">
          </div>
          <span class="nav-link-test text-dark ms-1">Dashboard</span>
        </a>
        @else
        <a class="nav-link" href="{{route('/')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/9823/9823663.png" width="20px" height="20px" alt="shop">
          </div>
          <span class="nav-link-test text-white ms-1">Dashboard</span>
        </a>
        @endif
      </li>
      <li class="nav-item">
        @if(trim($_SERVER['REQUEST_URI'],'/') == 'parking/categories')
        <a class="nav-link active " href="{{route('categories')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3418/3418139.png" width="20px" height="20px" alt="employees">
          </div>
          <span class="nav-link-test text-dark ms-1">Vehicle Categories</span>
        </a>
        @else
        <a class="nav-link" href="{{route('categories')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3418/3418139.png" width="20px" height="20px" alt="employees">
          </div>
          <span class="nav-link-test text-white ms-1">Vehicle Categories</span>
        </a>
        @endif
      </li>
      <li class="nav-item">
        @if(trim($_SERVER['REQUEST_URI'],'/') == 'parking/slots')
        <a class="nav-link active " href="{{route('slots')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/9835/9835748.png" width="20px" height="20px" alt="employees">
          </div>
          <span class="nav-link-test text-dark ms-1">Parking Slots</span>
        </a>
        @else
        <a class="nav-link" href="{{route('slots')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/9835/9835748.png" width="20px" height="20px" alt="employees">
          </div>
          <span class="nav-link-test text-white ms-1">Parking Slots</span>
        </a>
        @endif
      </li>
      <li class="nav-item">
        @if(trim($_SERVER['REQUEST_URI'],'/') == 'parking/bookings')
        <a class="nav-link active " href="{{route('bookings')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/996/996231.png" width="20px" height="20px" alt="employees">
          </div>
          <span class="nav-link-test text-dark ms-1">Bookings</span>
        </a>
        @else
        <a class="nav-link" href="{{route('bookings')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/996/996231.png" width="20px" height="20px" alt="employees">
          </div>
          <span class="nav-link-test text-white ms-1">Bookings</span>
        </a>
        @endif
      </li>

      <li class="nav-item">
        @if(trim($_SERVER['REQUEST_URI'],'/') == 'parking/users')
        <a class="nav-link active " href="{{route('users')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3001/3001758.png" width="20px" height="20px" alt="employees">
          </div>
          <span class="nav-link-test text-dark ms-1">Manage Users</span>
        </a>
        @else
        <a class="nav-link" href="{{route('users')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3001/3001758.png" width="20px" height="20px" alt="employees">
          </div>
          <span class="nav-link-test text-white ms-1">Manage Users</span>
        </a>
        @endif
      </li>
    
    @else

      <li class="nav-item">
        @if(trim($_SERVER['REQUEST_URI'],'/') == 'parking/dashboard')
        <a class="nav-link active" href="{{route('/')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/9823/9823663.png" width="20px" height="20px" alt="shop">
          </div>
          <span class="nav-link-test text-dark ms-1">Dashboard</span>
        </a>
        @else
        <a class="nav-link" href="{{route('/')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/9823/9823663.png" width="20px" height="20px" alt="shop">
          </div>
          <span class="nav-link-test text-white ms-1">Dashboard</span>
        </a>
        @endif
      </li>

      <li class="nav-item">
        @if(trim($_SERVER['REQUEST_URI'],'/') == 'parking/productTransfers')
        <a class="nav-link active " href="{{route('productTransfers')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/1969/1969142.png" width="20px" height="20px" alt="employees">
          </div>
          <span class="nav-link-test text-dark ms-1">Manage Product Transfer</span>
        </a>
        @else
        <a class="nav-link" href="{{route('productTransfers')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/1969/1969142.png" width="20px" height="20px" alt="employees">
          </div>
          <span class="nav-link-test text-white ms-1">Manage Product Transfer</span>
        </a>
        @endif
      </li>

    @endif 
      

      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-light text-xs font-weight-bolder opacity-6">Account pages</h6>
      </li>
      @if(Auth::user()->role === "admin")
      <li class="nav-item">
        @if(trim($_SERVER['REQUEST_URI'],'/') == 'parking/profile')
        <a class="nav-link active" href="{{route('profile.edit')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png" width="20px" height="20px" alt="employees">
          </div>
          <span class="nav-link-test text-dark ms-1">Profile</span>
        </a>
        @else
        <a class="nav-link" href="{{route('profile.edit')}}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <img src="https://cdn-icons-png.flaticon.com/512/236/236831.png" width="20px" height="20px" alt="employees">
          </div>
          <span class="nav-link-test text-white ms-1">Profile</span>
        </a>
        @endif
      </li>
      @endif
      <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
            <a class="nav-link" style="cursor: pointer;" :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
              <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <img src="https://cdn-icons-png.flaticon.com/512/2550/2550435.png" width="20px" height="20px" alt="employees">
              </div>
              <span class="nav-link-test text-white ms-1">{{ __('Log Out') }}</span>
            </a>
        </form>
      </li>
    </ul>
  </div>
</aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          {{-- <div class="input-group">
            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input type="text" class="form-control" placeholder="Type here...">
          </div> --}}
        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none"> {{ Auth::user()->name }}</span>
            </a>
          </li>
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
          <li class="nav-item px-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0">
              <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->