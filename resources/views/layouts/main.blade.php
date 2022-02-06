
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


</head>
<body>

<x-navbar/>

<main>
    <div class=" py-4 mb-4 mt-4">
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
</main>



      <!-- FOOTER -->
        <div class="py-4 footer-bottom clearfix text-center text-black">
            <div class="container">
              <small>Copyright © 2022 Fotógrafo Profissional | Powered by Samuel Elirio</small>
            </div>
        </div>


</body>

</html>

