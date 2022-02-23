@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')


    <style>
        .banner-eu {
            border-radius: 30px;
            box-shadow: rgb(82, 80, 80) 5px 0px 20px;


        }

        body {
            background-color: #ebe8e8;
        }

    </style>

    <div class="container-fluid text-center">
    </div>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="card">
                <h1 data-aos="zoom-in" class="card-title">Gabriel Fernandes</h1>
                <p data-aos="fade-up" class="card-description"> Fotógrafo Profissional, Desenvolvedor FullStack && investidor/dayTrade</p>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="img-fluid">
            <div class="container-fluid">
                <div class="container-fluid eu">
                    <a href="/image/_RSF7724.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <img class=" img-fluid mb-5 image-banner" src="/image/_RSF7724.jpg" class="img-fluid banner-eu" alt="Card image">
                    </a>
                </div>
            </div>
            <h3 class="text-center mt-3">Um pouco sobre mim</h3>
            <p class="description text-success container-fluid mt-3 flex-wap">
                😉 Oi, me chamo Gabriel, tenho 34 anos, há dois anos comecei a estudar programação.
                Antes trabalhava como Fotógrafo profissional. Entrei no mundo da programação por curiosidade.
                Resolvir seguir na área de desenvolvimento web. Dediquei 100% à programação, comecei com HTML e CSS pela Rockeseat.
                Tenho mais de 237 aulas só nessa plataforma, onde foi minha base na programação. ツ Atualmente estudo Laravel, tenho
                mais de 11 certificados, estou me especializando nesse framework full stack Atualmente consigo desenvolver uma aplicação do zero,
                e colocar no ar, atuando também como DevOps 😎 Skills: CSS3, HTML5. Javascript, MySQL, Linux, Docker, Bootstrap, Tailwind, Laravel,
                Stripe, Git e Github, Git Workflow,
            </p>

            <p class="text-center text-white  col-12 btn btn-primary">
                <a class="text-white" target="blank" href="https://github.com/Gabrielfernandes87f/my-pages/tree/main/certificados">

                    Certificados e cursos:  🚀

                </a>
            </p>


            <p class="text-center text-white  col-12 btn btn-primary">
                <a class="text-white" target="blank" href="https://gabrielfernandes87f.github.io/my-pages/">

                Github-pages 💻 portfolio

                </a>
            </p>
        </div>
    </div>





@endsection
