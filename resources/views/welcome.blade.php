<!DOCTYPE html>
<html lang="en">

<head>


    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('layouts.head')
</head>

<body>
    <style>
        body {
            background-color: #ebe8e8;
        }

    </style>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h2 data-aos="fade-up">
                <p><strong>Fotógrafo Profissional</strong></p>
            </h2>
            <h1 data-aos="zoom-in">Gabriel Fernandes</h1>
            <p><strong>Desenvolvedor FullStack/DevOps</strong></p>
            <p><strong>Laravel - ✔</strong></p>

        </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <x-navbar />
    </header><!-- End Header -->


    <main id="main">
s'
        <Style>
            .card-img {
                width: 720;
                max-width: 1080px;
                margin: 50px auto 0 auto;

            }

            .bg-color {
                background-color: #ffffff;
                padding: 5px;
                text-align: center;
            }

            .bg-color p,
            h3,
            h5 {
                padding: 0;
                margin: 0;
            }

            .bg-color p {
                font-size: 1rem;
                /*  mudar fonte depois */
            }

            .bg-color h5 {
                font-size: .7rem;
                font-weight: bold;
                margin-top: 3px;
            }

            .bg-color .description {
                font-size: .8rem;
                height: 70px;
                margin-top: 5px;
            }



            .image {
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

            .desc-profissoes {
                text-align: justify;
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
                            Esse site ainda tá em fase beta!
                            <br>
                            <br>
                            "Pretendo postar alguns dos meus trabalhos de fotografia."
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">


        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Perguntas Frequentes</h2>
                </div>

                <ul class="faq-list">

                    <li data-aos="fade-up">
                        <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">
                            Tem faculdade?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Não tenho, sou autodidata. Estudo sozinho, todos os dias.
                                Estou sempre fazendo um novo curso, tudo com foco e disciplina.


                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">
                            Hoje você se vê com qual profissão? ou qual tem mais haver com você?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Sou engenheiro de software, estou trabalhando como freelancer, desenvolvendo sites.
                                Não estou atuando mais como Fotógrafo. Estou focado em construir uma carreira
                                profissional como
                                programador.
                                investimento e day trade, não quero fazer disso profissão. Profissão pra mim é na área
                                programação.

                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">
                            Você tem alguma experiência como programador?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Ainda nao tenho experiência com programação, meu foco é mais em estudar, que procurar
                                trabalho.
                                já fiz vários projetos, esse site é mais um dos meus projetos, o primeiro site que eu
                                fiz,
                                foi em WorldPress.

                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">
                            Como se vê daqui a 5 anos?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Pretendo está atuando como programador fullstack,
                                devOps ('gostei muito de fazer deploy') e fotografando por hobby.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">
                            Como você descobriu que gostava de programar? como foi seu primeiro contato?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                comecei com python, fiz muitos projetinhos com python. gostava muito de uma biblioteca
                                chamada Charttbot. Era minha inteligencia artificial de if e else, gostava muito.
                                depois de alguns meses de estudo, eu decidi fazer um curso de programação.
                                foi ai que entrei na rocketseet foi primeiro contato com programação web.
                                conheci algumas linguagens, HTML5, CSS3 e javascript.

                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">
                            Qual a sua principal linguagem de programação ou principal framework?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Com certeza é laravel, eu gostei muito de fazer projetos com ele.
                                Laravel foi o framework que me colocou como desenvolvedor fullstack.

                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Profissão</h2>
                    <p>
                        Algumas das minhas principais profissões
                    </p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in">
                            <div class="member-img">
                                <img src="assets01/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <h3 class="text-center">
                                        Gabriel Fernandes
                                    </h3>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4 class="text-center">Fotógrafo</h4>
                                <span class="text-center">Fotógrafo profissional</span>
                                <p class="desc-profissoes">
                                    Fotógrafo profissional com mais de 8 anos de experiência no mercado.
                                    Fotografia de casamento, festa de 15 anos, formaturas e ensaio externos.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets01/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <h3 class="text-center">
                                        Gabriel Fernandes
                                    </h3>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4 class="text-center">Desenvolver fullStack/DevOps</h4>
                                <span class="text-center">Engenharia de software</span>
                                <p class="desc-profissoes">
                                    Desenvolver fullStack/DevOps
                                    com mais de 1 ano e meio de experiência.
                                    Desenvolvimento de sistemas web, integração de sistemas.
                                    Deploy de sistemas em Laravel.
                                    Estudando deploy de aplicação Node.
                                    foco em desenvolvimento de aplicação Laravel.

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets01/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <h3 class="text-center">
                                        Gabriel Fernandes
                                    </h3>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4 class="text-center">Investidor/DayTrader</h4>
                                <span class="text-center">Investidor/DayTrader</span>
                                <p class="desc-profissoes">
                                    Comecei no início da pandemia em opções, ganhei e perdi...
                                    Aprendi a trabalhar como Day trade na bolsa de valores.
                                    Por fim, eu parei de fazer trade e comecei a investir em ações, na Nasdaq
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->




        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Portfolio</h2>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todos</li>
                            <li data-filter=".filter-casamento">Casamento</li>
                            <li data-filter=".filter-15anos">15anos</li>
                            <li data-filter=".filter-pre-wedding">Pre-Wedding</li>
                            <li data-filter=".filter-ensaio">Ensaio fotografico</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-pre-wedding">
                        <div class="portfolio-wrap">
                            <img src="/image/GSF_0390.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Ver album</p>
                                <div class="portfolio-links">
                                    <a href="/albums"></a>
                                </div>
                            </div>
                            <div class="bg-color">
                                <p>Renally chagas</p>
                                <h5 class="">Pré-wedding</h5>
                                <p class="description">Tudo o que um sonho precisa para ser realizado é alguém que
                                    acredite que ele possa ser realizado.</p>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6 portfolio-item filter-casamento">
                        <div class="portfolio-wrap">
                            <img src="/image/GSF_0359.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Ver album</p>
                                <div class="portfolio-links">
                                    <a href="/albums"></a>
                                </div>
                            </div>
                            <div class="bg-color">
                                <p>Renally chagas</p>
                                <h5 class="">Casamento</h5>
                                <p class="description">Tudo o que um sonho precisa para ser realizado é.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-ensaio">
                        <div class="portfolio-wrap">
                            <img src="/image/GSF_2714.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <div class="portfolio-info">
                                    <p>Ver album</p>
                                    <div class="portfolio-links">
                                        <a href="/albums"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-color">
                                <p>Lurdinha</p>
                                <h5 class="">Ensaio fotografico</h5>
                                <p class="description">Tudo o que um sonho precisa para ser realizado é alguém que
                                    acredite que ele possa ser realizado.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-15anos">
                        <div class="portfolio-wrap">
                            <img src="/image/GSF_0390.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <p>Ver album</p>
                                <div class="portfolio-links">
                                    <a href="/albums"></a>
                                </div>
                            </div>
                            <div class="bg-color">
                                <p>Lurdinha</p>
                                <h5 class="">Ensaio fotografico</h5>
                                <p class="description">Tudo o que um sonho precisa para ser realizado é alguém que
                                    acredite que ele possa ser realizado.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <x-footer />

    </footer><!-- End Footer -->

</body>

</html>
