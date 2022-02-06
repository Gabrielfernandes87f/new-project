<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


</head>

<body>

    <x-navbar />

    <main>
        <div class=" py-4 mb-4 mt-4">
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </main>



    <!-- FOOTER -->

    <div class="container footer-bottom clearfix text-center mb-5">
        <div class="copyright mb-5">
            <small>Gabrielfernandesfotografias@outlook.com</small>
        </div>
        <div class="copyright">
            <small>Copyright © 2022 Fotógrafo Profissional && Desenvolvedor FullStack | Powered by Gabriel
                Fernandes</small>
        </div>
    </div>

</body>

</html>
