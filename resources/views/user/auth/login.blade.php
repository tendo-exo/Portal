<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap 5.3.3 -->
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100dvh;">
        <div class="wrapper p-4 rounded-5">
            <div class="row">

                <div class="col">
                    <div class="content-title text-center">
                        <h3>Welcome to <span class="green">CvSU</span> <span class="purple">Silang</span> Portal</h3>
                    </div>

                </div>

                <hr>

                <div class="row flex-column-reverse flex-md-row mx-md-0 mx-xl">
                    <div class="content col-8">
                        <div class="content-content">

                            <p>
                                For <span class="fw-bold green">new student</span> portal registration, <a
                                    href="{{ route('user.register') }}">Register</a>
                            </p>

                            <p>
                                Sign up for the student portal using your university-provided student email to
                                conveniently browse through your grades and view your enrolled subjects online
                            </p>

                            <p>
                                <span class="fw-bold green">Who may register?</span>
                            </p>

                            <p>
                                Students who enrolled from the Academic Year (A.Y.) 2022-2023 onwards are eligible
                                to
                                register
                                on
                                the CvSU Silang Student Portal. Additionally, students who enrolled in the previous
                                academic
                                year
                                (A.Y. 2021-2022) will have the opportunity to register soon.
                            </p>

                            <p>
                                For student portal concerns:</span> E-mail the Webmaster at <a
                                    href="">webmaster@cvsu-silang.edu.ph</a>
                            </p>

                            <p>
                                <span class="fw-bold green">CvSU Silang Contact:</span> Local: (046)888-9900 to 9904
                                Intl:
                                +63
                                46
                                888-9900 to 9904
                            </p>

                            <p>
                                Click the link for a <span class="fw-bold green">Quick View</span> of your <a
                                    href="">Registration
                                    form.</a>
                            </p>
                        </div>

                    </div>
                    <div class="col-4">
                        <div class="container-fluid">
                            <!-- CvSU Logo and Title -->
                            <div class="row">
                                <div class="col-sm-6 col-md-4 text-center mb-3 m-md-0 align-self-center">
                                    <div class="d-md-flex justify-content-end py-2 px-0">
                                        <img width="75px" class="object-fit-sm-scale"
                                            src="{{ asset('storage/images/cvsu-logo.png') }}"
                                            alt="Cavite State University - Silang Campus Logo">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-8 align-self-center">
                                    <div class="jea-wrapper d-grid justify-content-center justify-content-md-start">
                                        <div class="school-title">
                                            Cavite State University
                                        </div>
                                        <div class="school-campus">
                                            Silang Campus
                                        </div>
                                        <div class="school-tagline">
                                            Truth | Excellence | Service
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form -->
                            <form action="{{ route('user.login') }}" method="post">
                                @csrf
                                <div class="row py-4">
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="bi bi-person"></i>
                                            </span>
                                            <input type="email" class="form-control" placeholder="CvSU Gmail Address"
                                                aria-label="Email" aria-describedby="basic-addon1" name="email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <i class="bi bi-shield-lock"></i>
                                            </span>
                                            <input type="password" class="form-control" placeholder="Password"
                                                aria-label="Password" aria-describedby="basic-addon2" name="password">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                @error('failed')
                                    <div class="alert alert-danger" role="alert">
                                        <i class="bi bi-exclamation-triangle"></i>
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="col-12">
                                    <a href="{{ route('user.forgot_password') }}">Forgot Password</a>
                                </div>
                                <div class="d-grid gap-2 col-8 mx-auto py-2">
                                    <button class="btn btn-success" type="submit"><i class="bi bi-door-open"></i>
                                        Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
