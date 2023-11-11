@extends('loyout.template')

@section('titre')
    Services
@endsection
@section('content')
    @include('loyout.header-b')
    <main id="main">

        <!-- Blog Page Title & Breadcrumbs -->
        <div data-aos="fade" class="page-title">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <div class="container section-title" data-aos="fade-up">
                                <h2>Services</h2>
                            
                            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                                voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores.
                                Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                            </div><!-- End Section Title -->
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">Service</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Services Section - Home Page -->
        <section id="services" class="services">

            <!--  Section Title -->
            

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                            <div>
                                <h4 class="title"><a href="services-details.html" class="stretched-link">Lorem
                                        Ipsum</a>
                                </h4>
                                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias
                                    excepturi sint occaecati cupiditate non provident</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                            <div>
                                <h4 class="title"><a href="services-details.html" class="stretched-link">Dolor
                                        Sitema</a></h4>
                                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat tarad limino ata</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                            <div>
                                <h4 class="title"><a href="services-details.html" class="stretched-link">Sed ut
                                        perspiciatis</a></h4>
                                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                            <div>
                                <h4 class="title"><a href="services-details.html" class="stretched-link">Magni
                                        Dolores</a></h4>
                                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                    qui
                                    officia deserunt mollit anim id est laborum</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                            <div>
                                <h4 class="title"><a href="services-details.html" class="stretched-link">Nemo
                                        Enim</a>
                                </h4>
                                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                            <div>
                                <h4 class="title"><a href="services-details.html" class="stretched-link">Eiusmod
                                        Tempor</a></h4>
                                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam
                                    libero
                                    tempore, cum soluta nobis est eligendi</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- End Services Section --> 
    </main>
    @include('loyout.footer')
@endsection