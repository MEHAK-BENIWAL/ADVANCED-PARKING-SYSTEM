<x-main-layout>
    <!-- Start Breadcrumb 
   ============================================= -->
   <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
       <div class="container">
           <div class="row">
               <div class="col-lg-8 offset-lg-2">
                   <h1>Verify Email</h1>
                   <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                           <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                           <li class="active">Verify</li>
                       </ol>
                   </nav>
               </div>
           </div>
       </div>
   </div>
   <!-- End Breadcrumb -->
        <!-- Start Verify Email
    ============================================= -->
    <div class="contact-area default-padding" style='background-image: url("{{asset('assets/img/shape/28.png')}}");'>
        <div class="container">
            <div class="row align-center">
                <div class="col-tact-stye-one col-lg-12 mb-md-50">
                    <div class="contact-form-style-one">
                        {{-- <h5 class="sub-title">Already Registerd?</h5> --}}
                        <h2 class="heading">Verify Email</h2>
                        <div class="mb-4 text-sm text-gray-600">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </div>
                    
                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 badge bg-success text-white">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif
                    
                        <div class="mt-4 d-flex align-items-center justify-content-between">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                    
                                <div>
                                    <x-primary-button>
                                        {{ __('Resend Verification Email') }}
                                    </x-primary-button>
                                </div>
                            </form>
                    
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                    
                                <button class="p-2 bg-danger" type="submit" >
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End varify email -->
</x-app-layout>
