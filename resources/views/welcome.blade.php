<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600&family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,500;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,700;1,400&display=swap"
        rel="stylesheet">

</head>

<body>
    {{-- {{ dd($testimonials) }} --}}
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h2 data-aos="fade-up">
                <p><strong>Fotógrafo Profissional</strong></p>
            </h2>
            <h1 data-aos="zoom-in">Gabriel fernandes</h1>
            <p><strong>Desenvolvedor FullStack/DevOps</strong></p>
            <p><strong>Laravel - ✔</strong></p>
            @if (session('msg'))
                <a data-aos="fade-up" data-aos-delay="200" href="/" class="btn-get-started">{{ session('msg') }}</a>
            @else
                <a data-aos="fade-up" data-aos-delay="200" href="/testimonials/create" class="btn-get-started ">Deixe seu
                    Feedback</a>
            @endif
        </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <x-navbar />


    <main id="main">

        <link rel="/css/main.css" href="style.css">

        {{-- <div class="container marketing mt-5">
                @if (count($albums) > 0)
                <div class="row ">
              @foreach ($albums as $album)
            <div class="col-lg-4 image-main-capa">
                <p><a href="/albums/{{ $album->id }}" role="button" >
                     <img src="/img/album-capa/{{ $album->image_capa }}" class="bd-placeholder-img" width="200" role="img" alt="foto-capa">
                </a></p>
              <h2 class="name-image">{{ $album->name }}</h2>
              <p class="description">{{ $album->description }}</p>
              <p class="ver-galeria"><a class="btn btn-secondary" href="/albums/{{ $album->id }}" role="button">Ver album &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
        @endif --}}
        <Style>
            .card-img {
                width: 720;
                max-width: 1080px;
                margin: 50px auto 0 auto;

            }

            .bg-color {
                background-color: #e8e7e7;
                padding: 8px;
                border-radius: 5px;
            }

            .font-01 {}

            .image{
                border-radius: 5px 5px 0 0;
            }

            .image-banner {
                border-radius: 7px;
                width: 100%;
                margin: 5% auto 0;
                box-shadow: rgb(82, 80, 80) 5px 0px 20px;

            }

            .image:hover {
                margin-top: -30px;
                margin-bottom: 30px;
                transition: 450ms;
                transition-delay: 20ms;
                -o-transition-property: 5s;
                box-shadow: rgb(82, 80, 80) 5px 0px 20px;
            }

            .card-edit {
                border-radius: 10px;
                box-shadow: rgb(82, 80, 80) 0px 5px 5px;
            }

            .font-m {
                margin-left: 90%;
            }

            .h-100 {
                padding: 8px;
                border-radius: 8%;
                text-decoration: none;
            }

            .h-100:hover {
                margin-top: -30px;
                margin-bottom: 30px;
                transition: 450ms;
                transition-delay: 20ms;
                -o-transition-property: 5s;
                box-shadow: rgb(82, 80, 80) 5px 0px 20px;
                text-decoration: none;
            }

            .testimonial-profissao {
                font-family: 'Fira Sans', sans-serif;
                font-size: 1.2rem;
                font-weight: bold;
                color: #000;
            }

            a .h-100 {
                text-decoration: none;
                color: #000
            }

            a:hover {
                text-decoration: none;
                color: rgb(19, 19, 19);
            }

            .title-principal {

                font-weight: bold;
                color: #000;

            }

        </Style>



        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider mt-4 mb-5">

        <div class="container-fluid text-center mt-5 mb-5">
            <h4 class="title-principal">"Eu realmente acredito que há coisas que ninguém veria se eu não as
                fotografasse."</h4>
        </div>

        <div class="container-fluid">
            <div class="card container-fluid">
                <img class="card-img img-fluid image-banner" src="/image/GSF_0359.jpg" alt="Card image">
                <div class="container-fluid text-center">
                    <div class="container-fluid">
                        <h5 class=" container-fluid mt-5 mb-5 font-01">
                            Esse site ainda ta em fase beta, vai ter muitas atualizações ainda.
                            <br>
                            <br>
                            "Pretendo postar alguns dos meus trabalhos de fotografia."
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">


        <!--EVENTOS-->
        <div id="eventos" class="block">
            <div class="container card-edit">
                <h2 class="title text-center">Eventos</h2>
                <div class="button-group mt-5 mb-5 text-center">
                    <button type="button" class="btn btn-primary">Categoria</button>
                    <button type="button" class="btn btn-primary">Categoria</button>
                    <button type="button" class="btn btn-primary">Categoria</button>
                </div>
                <div class="row grid">
                    <div class="container-fluid fluid-card">
                        <div class="col-lg-4 col-4 mb-4  element-item ballet ensaio">
                            <a href="#" class="popup-link">
                                <img src="/image/GSF_0390.jpg" class="img-fluid image" />
                            </a>
                            <div class="bg-color mb-5">
                                <p>Nome: Gabriel</p>
                                <h5 class="mb-1">Categoria: categoria</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 mb-4  element-item ballet ensaio">
                            <a href="#" class="popup-link">
                                <img src="/image/GSF_0390.jpg" class="img-fluid image" />
                            </a>
                            <div class="bg-color mb-5">
                                <p>Nome: Gabriel</p>
                                <h5 class="mb-1">Categoria: categoria</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 mb-4  element-item ballet ensaio">
                            <a href="#" class="popup-link">
                                <img src="/image/GSF_0390.jpg" class="img-fluid image" />
                            </a>
                            <div class="bg-color mb-5">
                                <p>Nome: Gabriel</p>
                                <h5 class="mb-1">Categoria: categoria</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 mb-4  element-item ballet ensaio">
                            <a href="#" class="popup-link">
                                <img src="/image/GSF_0390.jpg" class="img-fluid image" />
                            </a>
                            <div class="bg-color mb-5">
                                <p>Nome: Gabriel</p>
                                <h5 class="mb-1">Categoria: categoria</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 mb-4  element-item ballet ensaio">
                            <a href="#" class="popup-link">
                                <img src="/image/GSF_0390.jpg" class="img-fluid image" />
                            </a>
                            <div class="bg-color mb-5">
                                <p>Nome: Gabriel</p>
                                <h5 class="mb-1">Categoria: categoria</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 mb-4  element-item ballet ensaio">
                            <a href="#" class="popup-link">
                                <img src="/image/GSF_0390.jpg" class="img-fluid image" />
                            </a>
                            <div class="bg-color mb-5">
                                <p>Nome: Gabriel</p>
                                <h5 class="mb-1">Categoria: categoria</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 mb-4  element-item ballet ensaio">
                            <a href="#" class="popup-link">
                                <img src="/image/GSF_0390.jpg" class="img-fluid image" />
                            </a>
                            <div class="bg-color mb-5">
                                <p>Nome: Gabriel</p>
                                <h5 class="mb-1">Categoria: categoria</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 mb-4  element-item ballet ensaio">
                            <a href="#" class="popup-link">
                                <img src="/image/GSF_0390.jpg" class="img-fluid image" />
                            </a>
                            <div class="bg-color mb-5">
                                <p>Nome: Gabriel</p>
                                <h5 class="mb-1">Categoria: categoria</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4 mb-4  element-item ballet ensaio">
                            <a href="#" class="popup-link">
                                <img src="/image/GSF_0390.jpg" class="img-fluid image" />
                            </a>
                            <div class="bg-color mb-5">
                                <p>Nome: Gabriel</p>
                                <h5 class="mb-1">Categoria: categoria</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div id="testimonial" class="block">
            <div class="container">
                <h2 class="title text-center">Feedback</h2>
                <div class="row">
                    @foreach ($testimonials as $testimonial)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="#" target="_blank">
                                <div class="card h-100">
                                    <div class="card-body testimonial-body">
                                        <div class="text-center">
                                            <img class="card-img-fluid img-fluid rounded-circle text-center"
                                                src="/img/depoimento/{{ $testimonial->image_testimonial }}"
                                                width="50%" alt="">
                                        </div>
                                        <h4 class="card-title text-center">{{ $testimonial->name }}</h4>
                                        <p class="card-text testimonial-profissao text-center">
                                            {{ $testimonial->profissao }}</p>
                                        <p class="card-text container-fluid">
                                            “{{ $testimonial->depoimento }}”
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    {!! $testimonials->links() !!}
                </div>
            </div>
        </div>

        <!--//EVENTOS-->
        {{-- @if (count($albums) > 0)
      @foreach ($albums as $album)
    <div class="col-md-3 mb-5">
        <div class="wsk-cp-product">
          <div class="wsk-cp-img">
              <a href="#">
                  <img src="image/samuel/1.jpeg" alt="">
              </a>
          </div>
          <div class="wsk-cp-text">
            <div class="wsk-cp-content">
                 <h3 class="wsk-cp-title">{{ $album->category }} </h3>
                 <p class="wsk-cp-description">{{ $album->description }}</p>
                 <a href="#" class="btn btn-primary text-center">Ver album</a>
            </div>
          </div>
        </div>
    </div>
    @endforeach
    @endif --}}

        <div class="container">

        </div>
        <hr class="featurette-divider">


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <x-footer />

    </footer><!-- End Footer -->




    <script src="/assets01/vendor/aos/aos.js"></script>
    <script src="/assets01/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets01/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets01/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets01/vendor/php-email-form/validate.js"></script>
    <script src="/assets01/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets01/js/main.js"></script>


</body>

</html>
