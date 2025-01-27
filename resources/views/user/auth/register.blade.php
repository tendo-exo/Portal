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

                <div class="col p-4">
                    <div class="content-title text-center mt-3">
                        <h2>REGISTER ACCOUNT</h2>
                    </div>

                </div>

                <hr>

                <div class="row flex-column-reverse flex-md-row mx-md-0 mx-xl">
                    <div class="col">
                        <div class="container-fluid">
                            <!-- CvSU Logo and Title -->
                            <div class="row">
                                <div class="col text-center mb-3 m-md-0 align-self-center">
                                    <div class="d-md-flex justify-content-end py-2 px-0">
                                        <img width="75px" class="object-fit-sm-scale"
                                            src="{{ asset('storage/images/cvsu-logo.png') }}"
                                            alt="Cavite State University - Silang Campus Logo">
                                    </div>
                                </div>
                                <div class="col align-self-center">
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
                            <form action="{{ route('user.register') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col py-4">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Student
                                                        Number</label>
                                                    <input type="text" class="form-control"
                                                        id="exampleFormControlInput1" name="student_number"
                                                        value="{{ old('student_number') }}">
                                                    @error('student_number')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">First
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        id="exampleFormControlInput1" name="first_name"
                                                        value="{{ old('first_name') }}">
                                                    @error('first_name')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Middle
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        id="exampleFormControlInput1" name="middle_name"
                                                        value="{{ old('middle_name') }}">
                                                    @error('middle_name')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Last
                                                        Name</label>
                                                    <input type="text" class="form-control"
                                                        id="exampleFormControlInput1" name="last_name"
                                                        value="{{ old('last_name') }}">
                                                    @error('last_name')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Email
                                                        Address</label>
                                                    <input type="email" class="form-control"
                                                        id="exampleFormControlInput1" name="email"
                                                        value="{{ old('email') }}">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1"
                                                        class="form-label">Password</label>
                                                    <input type="password" class="form-control"
                                                        id="exampleFormControlInput1" name="password">
                                                    @error('password')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Confirm
                                                        Password</label>
                                                    <input type="password" class="form-control"
                                                        id="exampleFormControlInput1" name="password_confirmation">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-grid gap-2 col-8 mx-auto py-2">
                                                    <button class="btn btn-success" type="submit">
                                                        <i class="bi bi-door-open"></i>
                                                        Register
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
