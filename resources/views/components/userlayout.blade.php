<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-md-flex justify-content-end py-2 px-0">
                <img width="75px" class="object-fit-sm-scale" src="{{ asset('storage/images/cvsu-logo.png') }}"
                    alt="Cavite State University - Silang Campus Logo">
            </div>

            <div class="col align-self-center">
                <div class="jea-wrapper d-grid justify-content-start">
                    <div class="school-title">Cavite State University</div>
                    <div class="school-campus">Silang Campus</div>
                    <div class="school-tagline">Truth | Excellence | Service</div>
                </div>
            </div>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav align-self-center justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item"><a class="nav-link" href="{{ route('user.dashboard') }}">Dashboard</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Others</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('user.my_subjects') }}">My Subjects</a></li>
                                <li><a class="dropdown-item" href="{{ route('user.my_schedule') }}">My Schedule</a></li>
                                <li><a class="dropdown-item" href="{{ route('user.my_checklist') }}">My Checklist</a></li>
                                <li><a class="dropdown-item" href="{{ route('user.my_registration_form') }}">My Registration Form</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('user.school_calendar') }}">School Calendar</a></li>
                                <li><a class="dropdown-item" href="{{ route('user.exam_schedule') }}">Exam Schedules</a></li>
                                <li><a class="dropdown-item" href="{{ route('user.bulletin_board') }}">Bulletin Board</a>
                                <li><a class="dropdown-item" href="{{ route('user.subject_materials') }}">Subject Materials</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('user.my_profile') }}">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('user.logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{ $slot }}

</body>

</html>
