<div>
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

    <meta property="og:image" content="//image.prntscr.com/image/93970e70e1f045e1aff76e05469008d8.png" />
    <meta property="og:image:secure_url" content="//image.prntscr.com/image/93970e70e1f045e1aff76e05469008d8.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" /><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
    <link href="/css/style2.css" rel="stylesheet">

    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="{{ route('home') }}#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="/albums">albums</a></li>
              <li><a class="nav-link scrollto" href="/eu">Quem Somos</a></li>
              <li><a class="nav-link scrollto" href="/#eventos">Eventos</a></li>
              <li><a class="nav-link scrollto" href="/#footer">contato</a></li>
              @auth

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


      <script src="/assets01/vendor/aos/aos.js"></script>
      <script src="/assets01/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="/assets01/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="/assets01/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="/assets01/vendor/php-email-form/validate.js"></script>
      <script src="/assets01/vendor/swiper/swiper-bundle.min.js"></script>

      <!-- Template Main JS File -->
      <script src="/assets01/js/main.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
