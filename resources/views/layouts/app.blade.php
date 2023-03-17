<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('css/common.css'); }}">

        <!-- JavaScript -->
        <script language="Javascript" type="text/javascript" src="{{ asset('js/common.js'); }}"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Bootstrap Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Teko">

        <!-- Bootstrap Icons https://icons.getbootstrap.com/ -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

        <title>Precision Riding Academy Ltd.</title>

    </head>
    <body>

        <!-- Header -->
        <div class="container-fluid bg-black bg-gradient text-bg-dark fs-4">
            <div class="row align-items-center">
                <div class="col text-center" style="font-size: 0.8em; ">
                    <div class="row"> <div class="col"><a target="0" href="https://www.google.ca/maps/place/Precision+Powersports+Ltd/@49.698519,-112.794592,15z/data=!4m6!3m5!1s0x536e86ffe8a81009:0x4033014a260ea341!8m2!3d49.6979318!4d-112.8199665!16s%2Fg%2F1tfby3ss" class=" text-decoration-none text-red"><i class="bi bi-map-fill"></i>  View Map</a></div></div>
                    <div class="row"><div class="col">1505 2nd Avenue South</div></div>
                    <div class="row"><div class="col">Lethbridge, AB T1J 0E8</div></div>
                </div>
                <div class="col-3">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('images/PRA-Logo.png'); }}" class="img-fluid" alt="Responsive image">
                    </a>
                </div>
                <div class="col text-center">
                    <div class="row ">
                        <div class="col">
                            <a href="https://twitter.com/PrecisionLeth" target="0" class="text-red"><i class="bi bi-twitter p-1"></i></a>
                            <a href="https://www.facebook.com/PrecisionPowersportsLtd/" target="0" class="text-red"><i class="bi bi-facebook p-1" ></i></a>
                            <a href="https://www.instagram.com/precisionpowersportsltd/" target="0" class="text-red"><i class="bi bi-instagram p-1"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="font-size: 0.8em;">T: (403) 394-6228</div>
                    </div>
                    <div class="row">
                        <div class="col" style="font-size: 0.8em;">TF: (888) 494-6228</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="navbar py-0 navbar-expand-sm navbar-dark bg-dark fs-4 shadow-lg" >
            <div class="container text-center">
                <button class="navbar-toggler mx-auto" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-label="Expand Navigation">
                    <div class="navbar-toggler-icon"></div>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="nav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="{{ route('welcome') }}" class="nav-link {{ Route::is('welcome') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link {{ Route::is('faq') ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About<i class="bi bi-chevron-down custom-chevron"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">About Us</a></li>

                                <li><a class="dropdown-item" href="{{ route('faq.index') }}">FAQ</a></li>

                                <li><a class="dropdown-item" href="{{ route('meet-team.index') }}">Meet the Team</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Courses<i class="bi bi-chevron-down custom-chevron"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="{{ route('courses') }}" class="dropdown-item">Course Overview</a></li>
                                <li><a class="dropdown-item" href="{{ route('registrations.index') }}">Register</a></li>
                            </ul>
                        </li>
                        @hasrole('admin')
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Manage<i class="bi bi-chevron-down custom-chevron"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('users.index') }}">Users</a></li>
                                <li><a class="dropdown-item" href="{{ route('roles.index') }}">Roles</a></li>
                            </ul>
                        </li>
                        @endhasrole
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" >
                                Calendar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://precisionpowersportsltd.com/" target=0 class="nav-link">Precision Powersports</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('info.index') }}" class="nav-link {{ Route::is('login') ? 'active' : '' }}"><i class="bi bi-person-circle"></i></a>
                        </li>
                        @hasrole('admin')
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Route::is('admin.dashboard') ? 'active' : '' }}"><i class="bi bi-person-badge"></i></a>
                        </li>
                        @endhasrole
                        @auth
                        <li class="nav-item">
                            <form action="{{ route('logout.perform') }}" method="post">
                                @csrf
                                <a href="{{ route('logout.perform') }}" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit(); "><i class="bi bi-box-arrow-right"></i></a>
                            </form>
                        </li>
                        @endauth
                    </ul>
                    {{-- <div>
                        <x-alert-success>
                            {{ session('success') }}
                        </x-alert-success>
                    </div> --}}
                </div>
            </div>
        </nav>

        <!-- checks to see if the slide element is in the blade being called and renders it conditionally -->

        @isset($slide)
            {{ $slide }}
        @endisset

        <!-- Main Content -->
        <div class="container p-3">
            {{ $content }}
        </div>

        <!-- Footer -->
        <footer class="container-fluid bg-red mt-3 shadow-lg text-white" >
            {{-- @if (session('success'))
            <x-modal id="logout-message" title="Logout Message">
                <x-slot>
                    <x-alert-success>
                        {{ session('success') }}
                    </x-alert-success>
                </x-slot>
                <x-slot name="footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </x-slot>
            </x-modal>
            @endif --}}

            <div class="row justify-content-around  p-3">
                <div class="col-sm-3 text-center text-sm-start py-4">
                    <div class="row fs-5"><div class="col">QUICK LINKS</div></div>
                    <hr class="border mb-3 border-dark" />
                    <div class="fs-6">
                        <a href="{{ route('faq.index') }}" class="text-decoration-none text-white"><div class="row"><div class="col">FAQ</div></div></a>
                        <a href="{{ route('info.index') }}" class="text-decoration-none text-white"><div class="row"><div class="col">Account</div></div></a>
                        <a href="{{ route('courses') }}" class="text-decoration-none text-white"><div class="row"><div class="col">Course Overview</div></div></a>
                        <a href="{{ route('registrations.index') }}" class="text-decoration-none text-white"><div class="row"><div class="col">Class Registration</div></div></a>
                        <a href="https://precisionpowersportsltd.com/" class="text-decoration-none text-white"><div class="row"><div class="col">Precision Powersports</div></div></a>
                    </div>
                </div>
                <div class="col-sm-3 py-4 text-center text-sm-start">
                    <div class="row fs-5"><div class="col">HOURS</div></div>
                    <hr class="border border-dark "/>
                    <div class="row"><div class="col footerText fs-6">Mon: closed</div></div>
                    <div class="row"><div class="col footerText fs-6">Tue-Fri: 9:00 a.m. to 5:00 p.m.</div></div>
                    <div class="row"><div class="col footerText fs-6">Sat: 9:00 a.m. to 5:00 p.m.</div></div>
                    <div class="row"><div class="col footerText fs-6">Sunday: Closed</div></div>
                    <div class="row"><div class="col footerText fs-6">Holidays: Closed</div></div>
                </div>
                <div class="col-sm-3 py-4 text-center text-sm-start">
                <div class="row fs-5"><div class="col">NEWSLETTER SIGNUP</div></div>
                <hr class="border border-dark mb-3"/>
                    <form action="">
                        <div class="form-floating text-dark">
                            <input class="form-control" type="email" id="email" placeholder="email">
                            <label for="email" class="form-label">Email: </label>
                        </div>
                        <button class="btn btn-dark mt-4">Submit</button>
                    </form>
                </div>
                <div class="col-sm-3 text-center text-sm-start py-4">
                    <div class="row fs-5"><div class="col">PRECISION POWERSPORTS</div></div>
                    <hr class="border border-dark mb-3" />
                    <div class="row-cols-1">
                        <div class="col">1505 2nd Avenue South</div>
                        <div class="col">Lethbridge, AB T1J 0E8</div>
                        <div class="col mt-3" >T: (403) 394-6228</div>
                        <div class="col" >TF: (888) 494-6228</div>
                        <div class="col mt-3 fs-5">
                            <a href="https://twitter.com/PrecisionLeth" target="0" class="text-white"><i class="bi bi-twitter p-1"></i></a>
                            <a href="https://www.facebook.com/PrecisionPowersportsLtd/" target="0" class="text-white"><i class="bi bi-facebook p-1" ></i></a>
                            <a href="https://www.instagram.com/precisionpowersportsltd/" target="0" class="text-white"><i class="bi bi-instagram p-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="container-fluid bg-black text-bg-dark text-center fst-italic">
            <div class="row">
                <div class="col-12">© 2023 Precision Powersports Ltd.</div>
            </div>
        </div>
</body>
</html>
