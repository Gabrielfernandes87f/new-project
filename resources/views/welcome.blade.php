<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sites</title>
  <meta name="description" content="Gabriel Fernandes, Niver, Bday, Parabéns!!!"/>
  <meta name="author" content="Gabriel Fernandes" />

  <!-- Favicons -->

  <link href="/assets01/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets01/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets01/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets01/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets01/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets01/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets01/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets01/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Knight - v4.3.0
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
   {{-- {{ dd($testimonials) }} --}}
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
        <p><strong>Desenvolvedor fullstack</strong></p>
        <h2 data-aos="fade-up"><strong>laravel/DevOps</strong></h2>
        <h1 data-aos="zoom-in">Gabriel Fernandes</h1>
        <p><strong>Fotógrafo Profissional</strong></p>
        @if (session('msg'))
        <a data-aos="fade-up" data-aos-delay="200" href="/" class="btn-get-started">{{ session('msg') }}</a>
        @else
        <a data-aos="fade-up" data-aos-delay="200" href="/testimonials/create" class="btn-get-started ">Deixe seu Feedback</a>
        @endif
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="https://gabrielfernandesweb.online#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online#about">Quem Somos</a></li>
          <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online#services">Serviços</a></li>
          <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online#public">Publicações</a></li>
          <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online#footer">contato</a></li>
          @auth
          <li><a class="nav-link scrollto" href="https://gabrielfernandesweb.online/dashboard">Perfil</a></li>



          <li> <form action="/logout" method="POST">
            @csrf
            <a href="/logout"
              class="nav-link"
              onclick="event.preventDefault();
              this.closest('form').submit();">
              Sair
            </a>
          </form>
          </li>
          @endauth
          @guest
          <li><a class="nav-link scrollto" href="/login">login</a></li>
          @endguest

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <main id="main">


  <x-main-home :testimonials="$testimonials" :albums="$albums"/>

  <x-tech  />


  <section class="page-section portfolio" id="portfolio">
    <div class="container">


        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Certificados</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="image/deploy.jpg" alt="..." />
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="image/PSRs.jpg" alt="..." />
                </div>
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="image/docker.jpg" alt="..." />
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Sobre Mim</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row lead-ded">
            @foreach ($gabriels as $gabriel)
            <div class="col-lg-4 ms-auto">
                <p class="lead">
                    {{$gabriel->description}}
            {{--    Sempre gostei muito de tecnologia em geral, quando entrei no mundo da programação eu vi que era isso que eu queria pra minha vida. As tecnologias que antes eu apenas assistia algo sobre ou lia alguma coisa falando, agora eu mesmo criava. Criando desde de um HELLO WORLD até um e-commerce. O Processo de aprendizado foi bem difícil no início, aos poucos a gente vai entendendo mais sobre e fica mais dinâmico e intuitivo. --}}

                </p>
            </div>
        <div class="col-lg-2 me-auto"><p class="lead lead-meddle"></p>
        </div>
        <div class="col-lg-4 me-auto">
            <p class="lead">
                {{ $gabriel->description_dois }}
                {{-- Aprendi muitas stacks até aqui, sempre buscando trabalhar usando as melhores práticas, as mais seguras e com o melhor desempenho. Escolhi o framework Laravel por uma indicação e vi que era uma ferramenta muito robusta onde posso trabalhar desde uma simples landing page até sites de grande porte.--}}
            </p>
        </div>
        @endforeach
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="image/curriculo2.pdf" target="_blank">
                <i class="fas fa-download me-2"></i>
                Meu currículo
            </a>
        </div>
    </div>
</section>
<!-- Contact Section-->


<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright © 2021 Web developer | Powered by Gabriel Fernandes</small></div>
    {{--<p class="fixed-bottom aling-center">Copyright © 2021 Web developer | Powered by Gabriel Fernandes</p> --}}
</div>
<!-- Portfolio Modals-->
<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Deploy</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="image/deploy.jpg" alt="..." />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4"> curso deploy, curso oferecido pela especializaTi</p>
                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                fechar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">PRSr</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="image/PSRs.jpg" alt="..." />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">curso de php, boas praticas.</p>
                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                fechar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Docker</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="image/docker.jpg" alt="..." />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">Curso de docker, curso oferecido pela especializaTi</p>
                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                <i class="fas fa-times fa-fw"></i>
                                fechar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

  {{--@foreach ($gabriels as $gabriel)
      <p>{{ $gabriel->description }}</p>
      <p>{{ $gabriel->description_dois }}</p>
  @endforeach

  {{ dd($gabriels) }}

--}}
    <!-- ======= Portfolio Section ======= -->
    <section id="public" class="portfolio mb-4 mt-4">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
            @if (count($events)== 0  && $search)
            <P id="count-event"><strong>Não foi possível encontrar nenhum eventos com {{$search}} |
                 <a href="/">Ver todos eventos</a>  </strong></P>
            @elseif (count($events)== 0)
                <h1 id="count-event"><strong>Não há eventos disponiveis</strong></h1>
            @endif

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($events as $event)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="/img/events/{{ $event->image }}" width="400" height="400"class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ date('d/m/Y', strtotime($event->date)) }}</h4>
                  <p>{{ count($event->users) }}</p>
                  <div class="portfolio-links">
                    <a href="/events/{{ $event->id }}"title="Mais detalhes"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>





      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">
        <div class="testimonials-slider swiper-container " data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide ">
              <div class="testimonial-item">
                <a href="https://instagram.com/aysagsadvs?utm_medium=copy_link" target="_blank">
                  <img src="/assets01/img/testimonials/Aysa.jpeg" class="testimonial-img" alt="">
                </a>
                <h3>Aysa Gusmão</h3>
                <h4>Advogada empresarial</h4>
                <p>
                  Poucas vezes temos a chance de encontrar pessoas de bom coração no mundo, pessoas que veem o mundo por uma perspectiva diferente, pessoas com um olhar sensível a tudo que acontece ao seu redor, com empatia e delicadeza para tentar se colocar no lugar do próximo e você é um desses seres de luz, que Deus conserve o seu coração assim e que você continue  sendo luz é diferença no mundo. Parabéns pelo seu dia🌷🌷🌷
                </p>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="https://instagram.com/its.diniz?utm_medium=copy_link" target="_blank">
                  <img src="/assets01/img/testimonials/isabelle.jpeg" class="testimonial-img" alt="">
                </a>
                <h3>Isabelle</h3>
                <p>
                  Muitos não se dão conta, mas o significado da palavra amizade é bem complexo. Amigo é aquela pessoa que você sabe que pode contar pra tudo. Alguém que te deixa a vontade pra ser você mesmo. Alguém que celebra tuas conquistas e te dá a mão nos momentos difíceis…
                  Eu não tenho muitos amigos… é muito difícil achar amigos de verdade. Mas sou feliz de chamar Gabriel de amigo e sou grata por todos os momentos compartilhados e mais ainda por nossa amizade continuar a mesma apesar da distância.
                </p>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="https://instagram.com/leiliane_goncalo?utm_medium=copy_link" target="_blank">
                  <img src="/assets01/img/testimonials/liany.jpeg" class="testimonial-img" alt="">
                </a>
                <h3>Liany</h3>
                <p>
                  Feliz aniversário doido da minha vida!
                  Que Deus te abençoe imensamente, <br/> te dê muitos anos de vida, saúde e sabedoria.
                  Estarei sempre aqui de 9 em 9 anos <br/> (entendemos kkk)
                  Enfim, parabéns!🥳❤
                </p>
              </div>
            </div><!-- End testimonial item -->
            @foreach ($testimonials as $testimonial)
            <div class="swiper-slide">
                <div class="testimonial-item">
                    <a href="{{ $testimonial->instagram }}" target="_blank">
                        <img src="/img/depoimento/{{ $testimonial->image_testimonial }}" class="testimonial-img" alt="">
                    </a>
                    <h3>{{ $testimonial->name }}</h3>
                    <h4>{{ $testimonial->profissao }}</h4>
                    <p>{{ $testimonial->depoimento }}</p>
                </div>
            </div><!-- End testimonial item -->
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Clients Section ======= -->


    <!-- ======= Pricing Section ======= -->

    <section id="pricing" class="pricing section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended" data-aos="zoom-in">
              <span class="recommended-badge">Recommended</span>
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Nosso Contato</h2>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Cidade:</h4>
                <p>Campina Grande</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Gabrielfernandesfotografias@outlook.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Tel</h4>
                <p>(83) 9 9672-4726</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Seu Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi envianda com sucesso. Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <h4><a href="https://www.meuevento.tech"target="_blank">meuevento.tech</a></h1>
            <p>Visite minhas redes sociais</p>
          </div>
        </div>

        <div class="social-links">
          <a href="https://wa.me/message/5N2F3F7WSTGCN1"target="_blank" class="twitter"><i class="bx bxl-whatsapp"></i></a>
          <a href="https://github.com/Gabrielfernandes87f"target="_blank" class="facebook"><i class="bx bxl-github"></i></a>
          <a href="https://instagram.com/gabriel.fernandes.f?utm_medium=copy_link"target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-discord"></i></a>

        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        <small>Copyright © 2021 Web developer | Powered by Gabriel Fernandes</small>.
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- Vendor JS Files -->



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
