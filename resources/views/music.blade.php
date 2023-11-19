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

                                <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio
                                    sint
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

                    <div>
                        {{-- {{ $albums }} --}}
                        @if (isset($albums))

                        @if (count($albums)>0)
                        @foreach ($albums as $albumId => $album)
                            <h1>{{ $album['name'] }}</h1>

                            <p>Artist: {{ $album['artists'][0]['name'] }} <br>
                                <a href="{{ $album['external_urls']['spotify'] }}" target="_blank">Acheter l'album</a>
                            </p>
                            <h2 class="mb-3">Songs:</h2>
                            <?php $i = 1; ?>

                            @foreach ($album['tracks']['items'] as $song => $artiste)
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <span>{{ $i++ }}. {{ $artiste['name'] }}</span><br>
                                        @foreach ($artiste['artists'] as $art)
                                            {{-- Interpreté par : {{ $art['name'] }} --}}
                                        @endforeach
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <audio controls id="audio-{{ $loop->iteration }}"
                                            src="{{ $artiste['preview_url'] }}" type="audio/mpeg"></audio>

                                    </div>
                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        {{-- <button class="btn btn-primary" onclick="playSong('{{ $song['preview_url'] }}')">Play</button> --}}
                                        <button class="btn btn-primary" onclick="togglePlay({{ $loop->iteration }})">
                                            <span id="play-icon-{{ $loop->iteration }}">Play</span></button>

                                        {{-- <button class="btn btn-primary" onclick="togglePlay('{{ $albumId }}')">
                                        <span id="play-icon-{{ $albumId }}">Play</span>
                                    </button> --}}
                                    </div>

                                </div>
                            @endforeach
                        @endforeach
                    @else 
                       <div class="row">
                            <p class="text-danger">cette section est vide ou vous avez un probleme de connexion</p>
                       </div>
                    @endif
                        @else
                            
                        @endif
                       

                    </div>



                </div><!-- End blog posts list -->

                {{-- <div class="pagination d-flex justify-content-center">
                    @if ($data['previous'] || $data['next'])
                        <div class="pagination">
                            @if ($data['previous'])
                                <a href="{{ $data['previous'] }}">Précédent</a>
                            @endif

                            @if ($data['next'])
                                <a href="{{ $data['next'] }}">Suivant</a>
                            @endif
                        </div>
                    @endif
                    
                </div><!-- End pagination --> --}}

                {{-- <div class="pagination">
                    @if ($offset > 0)
                        <a href="{{ route('music', ['offset' => $offset - $limit]) }}">Précédent</a>
                    @endif
            
                    @if ($offset + $limit < $totalAlbums)
                        <a href="{{ route('music', ['offset' => $offset + $limit]) }}">Suivant</a>
                    @endif
                </div> --}}

            </div>

        </section><!-- End Blog Section -->

    </main>
    @include('loyout.footer')
@endsection
