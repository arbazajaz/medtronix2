   <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">Medtronix</h1>
                   <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/services" class="nav-item nav-link">Services</a>
                        <a href="/projects" class="nav-item nav-link">Projects</a>
                        <a href="/team" class="nav-item nav-link">Our Team</a>
                         @guest
                            @if (Route::has('login'))
                                    <a class="nav-item nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                    <a class="nav-item nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                                <a href="{{ route('dashboard') }}" class="nav-item nav-link">Profile</a>
                                <a class="nav-item nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        @endguest
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <!-- <a href="contact.html" class="nav-item nav-link">Testimonial</a> -->
                    </div>
                    <a href="/contact-us" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Contact Us</a>
                </div>
            </nav>