<!DOCTYPE html>

<html lang="en">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="{{asset('assets/dist/logo3.png')}}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Code Coy">
    <meta name="keywords" content="Code Coy">
    <meta name="author" content="LEFT4CODE">
    <title>Login - WatsApp Admin</title>
    <!-- BEGIN: CSS Assets-->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('assets/dist/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('assets/dist/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('assets/dist/css/argon-dashboard.css?v=2.0.2')}}" rel="stylesheet" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login" style="background-image: url({{asset('assets/dist/loginscr.png')}}); background-size: cover;">
    <main class="main-content  mt-3">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column  mx-auto ">
                            <div class="card card-plain">
                                <div  style="margin-left: 120px;" id="logo" ><img src="{{asset('assets/dist/logo3.png')}}" width="170"
                                    height="160" /></div>

                                <h4 class="font-weight-bolder text-white text-center">Sign In</h4>
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                            </div>
                            @if(session('error'))
                            <span class="text-theme-6 mb-2">{{session('error')}}</span>
                            @endif
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="email" class="form-control form-control-lg" name="email"
                                            :value="old('email')" placeholder="Email" aria-label="Email" autofocus />
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control form-control-lg"
                                            placeholder="Password" name="password" autocomplete="current-password"
                                            aria-label="Password">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-lg bg-white  btn-lg w-50 mt-2 mb-0">Sign
                                            in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`
            </div>
        </section>
    </main>
    <script src="{{asset('assets/dist/js/app.js')}}"></script>
    <!-- END: JS Assets-->
</body>

</html>