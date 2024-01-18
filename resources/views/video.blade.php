@extends('loyout.template')

@section('titre')
    Videos
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
                            <h2>Vidéos</h2>
                            <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                                voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores.
                                Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="current">Vidéos</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Blog Section - Blog Page -->
        <section id="blog" class="blog">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 posts-list">
                    @foreach($videos as $aff)
                    <div class="col-xl-4 col-lg-6">
                        <article> 
                            {{-- <a href="https://www.youtube.com/watch?v=XXXXXXXXXXX">Regarder la vidéo sur YouTube</a> --}}
                            <div class="video-container" style="margin-bottom: 10px">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/{{ $aff->id_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                              </div>
                              <span>Interpreté par :</span>
                              <div class="d-flex align-items-center">
                                <img src="assets/img/blog/j.jpg" style="width: 30px" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author">{{ $aff->user->name }}</p>
                                    </div>
                            </div>
                        </article>
                    </div><!-- End post list item -->
                    @endforeach
                   
                    
                </div><!-- End blog posts list -->

                <div class="pagination d-flex justify-content-center">
                    <ul>
                        <li><a href="#">
                            {{ $videos->links() }}
                            </a></li>
                        
                    </ul>
                </div><!-- End pagination -->

            </div>

        </section><!-- End Blog Section -->

    </main>
    @include('loyout.footer')
    
@endsection