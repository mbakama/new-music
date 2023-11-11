@extends('loyout.template')

@section('titre')
    Music
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
                                <h2>Music</h2>
                            
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
                        <li class="current">Music</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Blog Section - Blog Page -->
        <section id="blog" class="blog">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 posts-list">

                    <div class="col-xl-4 col-lg-6">
                        <article>

                           

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-lg-6">
                        <article>

                            
                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-lg-6">
                        <article>

                            
                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-lg-6">
                        <article>

                           
                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-lg-6">
                        <article>

                           
                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-lg-6">
                        <article>

                            
                        </article>
                    </div><!-- End post list item -->

                </div><!-- End blog posts list -->

                <div class="pagination d-flex justify-content-center">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div><!-- End pagination -->

            </div>

        </section><!-- End Blog Section -->

    </main>
    @include('loyout.footer')
    
@endsection