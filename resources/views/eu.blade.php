@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')

    <style>
        .banner-eu {
            border-radius: 30px;
            box-shadow: rgb(82, 80, 80) 5px 0px 20px;


        }



    </style>

    <div class="container-fluid text-center mt-5">
    </div>

    <div class="container-fluid text-center mt-5">
        <div class="row">
            <div class="card">
                <h1 class="card-title">Gabriel Fernanfes</h1>
                <p class="card-description">Fotógrafo programador e investidor/dayTrade</p>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="img-fluid">
            <div class="container-fluid">
                <div class="container-fluid eu">
                    <img src="/image/_RSF7724.jpg" class="img-fluid banner-eu" alt="">
                </div>
            </div>
            <h3 class="text-center">Um pouco sobre mim</h3>
            <p class="description text-success container-fluid mt-3">
                Alfredo Bulton

                “Por acaso alguém se pergunta ou se importa hoje em dia se o Ulisses de Joyce foi escrito à máquina ou à mão
                ou se na orquestração da música de Honneger se utilizou o velho clavicórdio de Bach? Isso é querer reduzir o
                valor do acerto unicamente às velhas fórmulas puristas, condenando a priori qualquer aparelho que surja em
                busca de superação. A fotografia é uma nova forma – se é que se pode chamar de novo algo que foi criado há
                mais de um século – como também chegou a vez de ser novo para a tela, o mármore, os metais e até o marfim”.
            </p>
        </div>
    </div>





@endsection
