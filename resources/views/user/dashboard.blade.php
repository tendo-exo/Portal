<title>Dashboard | {{ config('app.name') }}</title>

<x-userlayout>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mt-4">
                    <h6>{{ $studentRecord->student_number }}</h6>
                    <h6>{{ $studentRecord->name }}</h6>
                    <h6>{{ $studentRecord->course }}</h6>
                </div>
            </div>
        </div>

        <hr>

        <div class="row mb-4 d-flex flex-column">
            <div class="col-8">
                <h3>Dashboard</h3>
            </div>
            <div class="row row-cols-2 row-cols-md-4 g-2">
                <div class="col box-transform">
                    <div class="card text-center h-100">
                        <img src="{{ asset('storage/images/book.webp') }}" alt="">
                        <a class="stretched-link" href="{{ route('my_subjects') }}">
                            <div class="card-body">
                                <h5 class="card-text">My Subjects</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col box-transform">
                    <div class="card text-center h-100">
                        <img src="{{ asset('storage/images/checklist.jpg') }}" alt="">
                        <a class="stretched-link" href="{{ route('my_checklist') }}">
                            <div class="card-body">
                                <h5 class="card-text">My Checklist</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col box-transform">
                    <div class="card text-center h-100">
                        <img src="{{ asset('storage/images/form.webp') }}" alt="">
                        <a class="stretched-link" href="{{ route('my_registration_form') }}">
                            <div class="card-body">
                                <h5 class="card-text">My Registration</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col box-transform">
                    <div class="card text-center h-100">
                        <img src="{{ asset('storage/images/schedule.png') }}" alt="">
                        <a class="stretched-link" href="{{ route('my_schedule') }}">
                            <div class="card-body">
                                <h5 class="card-text">My Schedule</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="global--footer container-fluid bg-dark-subtle mt-auto" data-bs-theme="dark">
        <div class="row text-light px-sm-5">
            <div class="col-sm-12 p-3 text-center text-secondary-emphasis">
                2025 <i class="fa-regular fa-copyright"></i>
                Cavite State University | Silang, Cavite, Philippines | Developers contact: <a
                    href="mailto:webmaster@cvsu-silang.edu.ph">webmaster@cvsu-silang.edu.ph</a>
            </div>
        </div>
    </footer>
</x-userlayout>
