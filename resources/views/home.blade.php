@extends('loyout/template')

@section('titre')
    Accueil
@endsection
    @section('content') 
        @include('loyout/header')
        <main id="main">

            <!-- Hero Section - Home Page -->
            <section id="hero" class="hero">

                <img src="assets/img/cover.jpg" alt="" data-aos="fade-in">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 data-aos="fade-up" data-aos-delay="100">Bienvenue dans notre site officiel</h2>
                            <p data-aos="fade-up" data-aos-delay="200">«L’humanité fléchit aujourd’hui sous le poids des difficultés, de la peine et du chagrin ; nul n’y échappe… ; mais Dieu soit loué, le remède est à portée. »</p>
                        </div>
                      
                    </div>
                </div>

            </section><!-- End Hero Section --> 

            <section id="video" class="video"> 
                <div class="video-container">
                    <video controls style="max-width: 100%; height: auto">
                                   
                              <source src="assets/video/compos.mp4" type="video/mp4" />
                                     
                              <!-- <source src="chemin_vers_la_video.webm" type="video/webm"> -->
                                      Votre navigateur ne prend pas en charge la lecture de vidéos.  
                                 
                            </video>
                  </div>
            </section>
            <!-- About Section - Home Page -->
            <section id="about" class="about">

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row align-items-xl-center gy-5">

                        <div class="col-xl-5 content">
                            <h3>A propos</h3>
                            <h2><i class="fw-bold">«Le groupe Culturel Tomorrow Generation »</i></h2>
                            <p>Est une organisation d’inspiration baha’ie regroupant les hommes et femmes, particulièrement les jeunes de toutes  les origines, croyant en un seul Dieu et ayant une mission commune, celle de servir l’humanité de façon désintéressée. C’est une expression de la culture d’une manière artistique. <span class="fw-bold">TMG</span> est également un groupe religieux et social. Dans ce groupe, les enseignements divins sont promus à travers les arts pour résoudre les préoccupations de la société. les solutoions regroupé en 4 concepts clé, Amour, Unité, Service, Paix</p>
                            <a href="{{ route('about') }}" class="read-more"><span>Plus</span><i class="bi bi-arrow-right"></i></a>
                        </div>

                        <div class="col-xl-7">
                            <div class="row gy-4 icon-boxes">

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="icon-box">
                                        <i class="bi bi-buildings"></i>
                                        <h3>Amour</h3>
                                        <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor
                                            voluptatem
                                        </p>
                                    </div>
                                </div> <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box">
                                        <i class="bi bi-clipboard-pulse"></i>
                                        <h3>Unité</h3>
                                        <p>
                                        </p>
                                    </div>
                                </div> <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="icon-box">
                                        <i class="bi bi-command"></i>
                                        <h3>Service</h3>
                                        <p>Servir l'humanité, c'est servir Dieu</p>
                                    </div>
                                </div> <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="icon-box">
                                        <i class="bi bi-graph-up-arrow"></i>
                                        <h3>Paix</h3>
                                        <p>La paix ne sera possible si les droits restent inegeaux entre les hommes et les femmes</p>
                                    </div>
                                </div> <!-- End Icon Box -->

                            </div>
                        </div>

                    </div>
                </div>

            </section><!-- End About Section --> 

            <!-- Portfolio Section - Home Page -->
            <section id="portfolio" class="portfolio">

                <!--  Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Galerie</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                        data-sort="original-order">

                        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                            <li data-filter="*" class="filter-active">All</li>
                            {{-- <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-product">Card</li>
                            <li data-filter=".filter-branding">Web</li> --}}
                        </ul><!-- End Portfolio Filters -->

                        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                            @foreach($users as $user)
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                <img src="assets/img/team/gdk1.jpg" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>{{$user->name }}</h4>
                                    <p>{{$user->boi}}</p>
                                    <a href="assets/img/team/gdk1.jpg" title="{{$user->name }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->
                            @endforeach
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                <img src="assets/img/team/rebecca1.jpg" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="assets/img/team/rebecca1.jpg" title="App 1"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                <img src="assets/img/team/t.jpg" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="assets/img/team/t.jpg" title="App 1"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                <img src="assets/img/team/mi.jpg" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="assets/img/team/mi.jpg" title="App 1"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                <img src="assets/img/team/j.jpg" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="assets/img/team/j.jpg" title="App 1"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->
                        </div><!-- End Portfolio Container -->

                    </div>

                </div>

            </section><!-- End Portfolio Section --> 
           

            <!-- Team Section - Home Page -->
            <section id="team" class="team">
                 <!--  Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Artistes</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-5">
                        @foreach($users as $artist)
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('storage/'. $value->artist) }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>{{ $artist->name}} {{ $artist->prenom}}</h4>
                                @if($artist->role !=="artiste")
                                <span>{{ $artist->role }} </span>
                                @else
                                <span>{{ $artist->role }} </span>
                                @endif
                                <p>{{$artist->bio }}</p>
                            </div>
                        </div><!-- End Team Member -->
                        @endforeach
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/team/gdk1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Grand K</h4>
                                <span>Coord & Chanteur</span>
                                <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum
                                    distinctio
                                    dire flow</p>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/t.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Thierry Gola</h4>
                                <span>Chanteur</span>
                                <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores
                                    exercitationem ut</p>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="assets/img/team/j.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Jully</h4>
                                <span>Chanteuse</span>
                                <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel
                                    tque
                                    sed facilis at qui</p>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="assets/img/team/rebecca1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Rebecca</h4>
                                <span>Chanteuse</span>
                                <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam
                                    quasi
                                    quam consectetur</p>
                            </div>
                        </div><!-- End Team Member -->

                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                            <div class="member-img">
                                <img src="assets/img/team/mi.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href="#"><i class="bi bi-twitter"></i></a>
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-instagram"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>Mi</h4>
                                <span>Chanteuse</span>
                                <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus
                                    quia
                                    impedit laborum velit</p>
                            </div>
                        </div><!-- End Team Member -->

                      

                    </div>

                </div>

            </section><!-- End Team Section --> 

            <!-- Recent-posts Section - Home Page -->
            <section id="recent-posts" class="recent-posts"> 
                <!--  Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Recent Posts</h2>
                    <p>Nos dernieres nouvelles vont apparaitre ici</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">

                        @foreach ($post as $value)
                            
                        
                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <article>

                                <div class="post-img">
                                    <img src="{{ asset('storage/'. $value->image) }}" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">{{ $value->categorie->categorie_name }}</p>

                                <h2 class="title">
                                    <a href="{{ route('detail',$value->slug) }}">{{ $value->titre }}</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    {{-- <img src="assets/img/blog/j.jpg" alt="" --}}
                                    <img src="{{ asset('storage/'. $value->user->photo) }}" alt="Image"
                                        class="img-fluid post-author-img flex-shrink-0">
                                        <div class="post-meta">
                                            <p class="post-author">{{ $value->user->name }}</p>
                                            <p class="post-date">
                                                <time datetime="2022-01-01">{{ $value->formatted_date }}</time>
                                            </p>
                                        </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                        @endforeach
                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/baniere.jpg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Music</p>

                                <h2 class="title">
                                    <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/j.jpg" alt=""
                                        class="img-fluid post-author-img flex-shrink-0">
                                    <div class="post-meta">
                                        <p class="post-author">Jully</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Jun 5, 2022</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <article>

                                <div class="post-img">
                                    <img src="assets/img/blog/logo.jpg" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Music</p>

                                <h2 class="title">
                                    <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et
                                        soluta</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="assets/img/blog/j.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                                        <div class="post-meta">
                                            <p class="post-author">Jully</p>
                                            <p class="post-date">
                                                <time datetime="2022-01-01">Jun 5, 2022</time>
                                            </p>
                                        </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                    </div><!-- End recent posts list -->

                </div>

            </section><!-- End Recent-posts Section -->

            <!-- Contact Section - Home Page -->
            <section id="contact" class="contact">

                <!--  Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-6">

                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="200">
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Address</h3>
                                        <p>Binza Ozone</p>
                                        <p>Ngaliema, NY 535022</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="300">
                                        <i class="bi bi-telephone"></i>
                                        <h3>Appel</h3>
                                        <p>+243 8145 3222 7</p>
                                        {{-- <p>+1 6678 254445 41</p> --}}
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="400">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Email</h3>
                                        {{-- <p>info@example.com</p> --}}
                                        <p>hectormbakama@gmail.com</p>
                                    </div>
                                </div><!-- End Info Item -->

                                <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="500">
                                        <i class="bi bi-clock"></i>
                                        <h3>Heures de repetitions</h3>
                                        <p>Lundi - Vendredi</p>
                                        <p>9:00AM - 05:00PM</p>
                                    </div>
                                </div><!-- End Info Item -->

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Your Email" required>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                                            required>
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit">Send Message</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Contact Form -->

                    </div>

                </div>

            </section><!-- End Contact Section -->

        </main>
        @include('loyout.footer')
    {{-- </div> --}}
@endsection

{{-- </div> --}}
