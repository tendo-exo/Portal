<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column min-vh-100">

    <nav class="navbar bg-warning bg-gradient">
        <div class="container">
            <div class="row mx-auto mx-md-0">
                <div class="col">
                    <div class="navbar-brand" href="#">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 text-center mb-3 m-md-0 align-self-center">
                                <div class="d-md-flex justify-content-end">
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
                    </div>
                </div>
            </div>
            <div class="row gx-2 mt-3 mt-lg-0 jea mx-auto mx-lg-0 mx-md-0">
                <!-- DASHBOARD -->
                <div class="col">
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-success">
                        <i class="bi bi-house-door-fill"></i>
                    </a>
                </div>
                <!-- MENU ACTIONS -->
                <div class="col">
                    <div class="dropdown-center">
                        <button class="btn btn-outline-success" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" data-bs-display="static">
                            <i class="bi bi-caret-down-fill"></i>
                            <!-- <i class="fa-solid fa-caret-down"></i> -->
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end">
                            <li><a class="dropdown-item text-uppercase" href="{{ route('my_subjects') }}">My Subjects</a></li>
                            <li><a class="dropdown-item text-uppercase" href="{{ route('my_checklist') }}">My Checklist</a></li>
                            <li><a class="dropdown-item text-uppercase" href="{{ route('my_registration_form') }}">My Registration</a></li>
                            <li><a class="dropdown-item text-uppercase" href="{{ route('my_schedule') }}">My Schedule</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-uppercase" href="/dash/grades">My Checklist</a></li>
                            <li><a class="dropdown-item text-uppercase" href="/dash/regform">My Registration</a></li>
                        </ul>
                    </div>
                </div>
                <!-- PROFILE -->
                <div class="col">
                    <a href="/profile" class="btn btn-outline-success">
                        <i class="bi bi-person-fill-gear"></i>
                        <!-- <i class="fa-solid fa-user-gear"></i> -->
                    </a>
                </div>
                <!-- LOGOUT -->
                <div class="col">
                    <a href="/logout" class="btn btn-outline-danger">
                        <i class="bi bi-box-arrow-right"></i>
                        <!-- <i class="fa-solid fa-right-from-bracket"></i> -->
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{ $slot }}

</body>

</html>
