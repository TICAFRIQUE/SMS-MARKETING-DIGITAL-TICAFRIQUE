<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Charset et viewport -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO -->
    <title>@yield('title', 'TICAFRIQUE | SMS MARKETING')</title>
    <meta name="description" content="@yield('description', 'Solutions TIC pour entreprises et organisations, spécialisées dans la performance et la communication numérique.')">
    <meta name="keywords" content="@yield('keywords', 'TIC, Afrique, SMS Marketing, télécoms, solutions numériques, communication, entreprises')">
    <meta name="author" content="http://ticafrique.ci">

    <!-- Open Graph (partage réseaux sociaux) -->
    <meta property="og:title" content="@yield('title', 'TICAFRIQUE | SMS MARKETING')">
    <meta property="og:description" content="@yield('description', 'Solutions TIC pour entreprises et organisations, spécialisées dans la performance et la communication numérique.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('site/img/preview.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('site/img/favicon.ico') }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('site/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>



<body>
    {{-- header --}}
    @include('fronts.layouts.header')
    {{-- end header --}}

    {{-- content --}}
    <main>
        @yield('content')
    </main>
    {{-- end content --}}

    {{-- footer --}}
    @include('fronts.layouts.footer')
    {{-- end footer --}}



    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('site/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('site/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('site/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('site/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Back-to-top JS -->
    <script>
        // Affichage Back-to-top lors du scroll
        window.addEventListener('scroll', function() {
            const backToTop = document.querySelector('.back-to-top');
            if (window.scrollY > 300) {
                backToTop.style.display = 'flex';
            } else {
                backToTop.style.display = 'none';
            }
        });

        // Scroll smooth
        document.querySelector('.back-to-top').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

    <!-- Template Javascript -->
    <script src="{{ asset('site/js/main.js') }}"></script>

    <!-- jQuery (si utilisé par tes libs) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap Bundle JS -->
    <script src="{{ asset('site/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('site/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- AOS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init({
                duration: 1000, // durée de l’animation
                once: true // animation seulement au premier scroll
            });
        });
    </script>

    <!-- Script principal -->
    <script src="{{ asset('site/js/main.js') }}"></script>


</body>

</html>
