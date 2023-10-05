<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <title>
    {{ env('APP_NAME') }}
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/css/soft-ui-dashboard.css?v=1.0.7')}}" rel="stylesheet" />
</head>
<style>
    .content{
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body class="g-sidenav-show  bg-gray-100">
   <div class="content">
        <!-- Start 404 
        ============================================= -->
        <div class="box w-75 error-page-area default-padding text-center">
            <div class="container">
                <div class="error-box">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h1>404</h1>
                            <h2>Sorry Page Was Not Found!</h2>
                            <p>
                                Household shameless incommode at no objection behaviour. Especially do at he possession insensible sympathize boisterous it. Songs he on an widen me event truth.
                            </p>
                            <a class="btn mt-20 btn-md btn-info" href="{{route('/')}}">Back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End 404 -->
   </div>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/soft-ui-dashboard.min.js?v=1.0.7')}}"></script>

</body>
</html>