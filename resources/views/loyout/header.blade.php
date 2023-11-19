<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1><span class="text-primary">TM's</span><span class="text-danger">Generation</span></h1> 

            <span>.</span>
        </a>

        <!-- Nav Menu -->
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" @if (Route::currentRouteName() == 'home') class="active" @endif>Accueil</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" @if (Route::currentRouteName() == 'about') class="active" @endif>A propos</a>
                    {{-- <a href="index.html#about">A propos</a> --}}
                </li>
                {{-- <li><a href="{{ route('music') }}" @if (Route::currentRouteName() == 'music') class="active" @endif>Music</a> --}}
              <li><a href="{{ route('musics') }}" @if (Route::currentRouteName() == 'musics') class="active" @endif>Music</a>

                </li>
                <li><a href="{{ route('video') }}" @if (Route::currentRouteName() == 'video') class="active" @endif>Vidéo</a>
                </li>
                <li><a href="{{ route('service') }}" @if (Route::currentRouteName() == 'service') class="active" @endif>Service</a>
                </li>
                <li><a href="{{ route('blog') }}" @if (Route::currentRouteName() == 'blog') class="active" @endif>Blog</a></li>
                <li><a href="{{ route('contact') }}" @if (Route::currentRouteName() == 'contact') class="active" @endif>Contact</a>
                </li>

            </ul>

            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav><!-- End Nav Menu -->

        <a class="btn-getstarted" href="index.html#about">Get Started</a>

    </div>
</header><!-- End Header -->
