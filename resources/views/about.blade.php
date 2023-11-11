@extends('loyout.template')
@section('titre')
    A propos
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
<h2>A propos</h2>
                            <p class="mb-0">
                                Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint
                                voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores.
                                Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div><!-- End Page Title -->

         <!-- About Section - Home Page -->
         <section id="about" class="about">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5"> 
                    <p class="text-center">
                        <span style="font-family: fantasy">L</span>orem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, explicabo blanditiis voluptatibus debitis illum earum asperiores hic natus, suscipit voluptate ipsum? Eaque aut recusandae fugiat adipisci soluta at porro eligendi?</p>
                </div>
            </div>

        </section><!-- End About Section -->


    </main>
    @include('loyout.footer')
    
@endsection