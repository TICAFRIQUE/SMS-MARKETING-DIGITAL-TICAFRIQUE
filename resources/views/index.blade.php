@extends('fronts.layouts.base')

@section('title', 'index')

@section('content')

    {{-- carousel --}}
    <section class="container-fluid p-0 mb-5">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row g-0 align-items-center m-0 flex-column flex-md-row">
                        <!-- Image -->
                        <div class="col-12 col-md-6 text-center p-0">
                            <img src="site/img/SMS-marketing-1.jpg" class="img-fluid w-100 rounded-2"
                                alt="SMS Professionnel">
                        </div>
                        <!-- Texte -->
                        <div class="col-12 col-md-6 p-4 p-md-5 text-center text-md-start">
                            <h1 class="fw-bold text-accent fs-4 fs-md-2">Avec le SMS professionnel de TICAFRIQUE</h1>
                            <p class="fs-6 fs-md-5 text-secondary">
                                Bénéficiez de nouveaux canaux de communication sur la plateforme et améliorez votre
                                productivité !
                            </p>
                            <a href="{{ route('ticafrique.demande') }}"
                                class="btn btn-accent py-2 px-4 px-md-5 text-white fw-bold d-inline-block"
                                style="position: relative; z-index: 10;">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row g-0 align-items-center m-0 flex-column flex-md-row">
                        <div class="col-12 col-md-6 text-center p-0">
                            <img src="site/img/smsPro.png" class="img-fluid w-100 rounded-2" alt="Communication rapide">
                        </div>
                        <div class="col-12 col-md-6 p-4 p-md-5 text-center text-md-start">
                            <h1 class="fw-bold text-accent fs-4 fs-md-2">Communiquez rapidement et efficacement</h1>
                            <p class="fs-6 fs-md-5 text-secondary">
                                Atteignez vos clients sur mobile en quelques secondes avec un taux de délivrabilité élevé.
                            </p>
                            <a href="{{ route('ticafrique.demande') }}"
                                class="btn btn-accent py-2 px-4 px-md-5 text-white fw-bold d-inline-block"
                                style="position: relative; z-index: 10;">
                                Essayer maintenant
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row g-0 align-items-center m-0 flex-column flex-md-row">
                        <div class="col-12 col-md-6 text-center p-0">
                            <img src="site/img/SMS_Marketing.jpg" class="img-fluid w-100 rounded-2"
                                alt="Support TICAFRIQUE">
                        </div>
                        <div class="col-12 col-md-6 p-4 p-md-5 text-center text-md-start">
                            <h1 class="fw-bold text-accent fs-4 fs-md-2">Un support dédié pour vos besoins</h1>
                            <p class="fs-6 fs-md-5 text-secondary">
                                Notre équipe est disponible pour vous accompagner et vous conseiller à chaque étape.
                            </p>
                            <a href="{{ route('ticafrique.demande') }}"
                                class="btn btn-accent py-2 px-4 px-md-5 text-white fw-bold d-inline-block"
                                style="position: relative; z-index: 10;">
                                Nous contacter
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Indicateurs -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        </div>
    </section>
    {{-- end carousel --}}




    <!-- Section Partenaires / Avantages -->
    <div class="container mb-5">
        <div class="row g-4 text-center">

            <div class="col-md-4" data-aos="flip-right">
                <i class="fas fa-handshake fa-4x text-accent mb-3"></i>
                <h5 class="fw-bold text-accent">Rassurer et fidéliser les clients</h5>
                <p>Fidéliser votre clientèle en privilégiant une relation de proximité</p>
            </div>

            <div class="col-md-4" data-aos="flip-right">
                <i class="fas fa-bullhorn fa-4x text-accent mb-3"></i>
                <h5 class="fw-bold text-accent">Promouvoir les produits et services</h5>
                <p>Informer votre cible des arrivages, des déstockages, des baisses des prix.</p>
            </div>

            <div class="col-md-4" data-aos="flip-right">
                <i class="fas fa-chart-line fa-4x text-accent mb-3"></i>
                <h5 class="fw-bold text-accent">Réduire les coûts de communication</h5>
                <p>Réduire les coûts sans réduire la qualité des échanges avec les clients et partenaires.</p>
            </div>

            <div class="col-md-4" data-aos="flip-left">
                <i class="fas fa-bolt fa-4x text-accent mb-3"></i>
                <h5 class="fw-bold text-accent">Annoncer instantanément</h5>
                <p>Annoncer, informer ou rappeler à vos clients et partenaires les évènements en temps réel.</p>
            </div>

            <div class="col-md-4" data-aos="flip-left">
                <i class="fas fa-rocket fa-4x text-accent mb-3"></i>
                <h5 class="fw-bold text-accent">Augmenter votre rendement</h5>
                <p>Réduire les tâches quotidiennes et améliorer votre business au quotidien.</p>
            </div>

            <div class="col-md-4" data-aos="flip-left">
                <i class="fas fa-mobile-screen fa-4x text-accent mb-3"></i>
                <h5 class="fw-bold text-accent">Atteindre 99,99% de votre cible</h5>
                <p>Entretenir une relation directe avec votre cible qui a toujours le mobile à portée de main.</p>
            </div>

        </div>
    </div>

    <!-- Section SMS Professionnel -->
    <section class="py-5" style="background: linear-gradient(135deg, #93a7c1, #3493e7 80%); color: #fff;">
        <div class="container">
            <div class="row align-items-center">

                <!-- Image -->
                <div class="col-lg-6 text-center mb-4 mb-lg-0">
                    <img src="site/img/booster.png" class="img-fluid rounded-4 shadow-lg" alt="SMS Widget"
                        style="max-width: 90%;">
                </div>

                <!-- Texte -->
                <div class="col-lg-6">
                    <h2 class="mb-4 fw-bold text-light">
                        Comment augmenter votre rendement avec le SMS PROFESSIONNEL ?
                    </h2>
                    <p class="mb-4 text-light">
                        Le SMS professionnel vous permet d’atteindre directement votre cible, développer votre notoriété et
                        fidéliser vos clients de manière simple et efficace.
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-info"></i>Rester en contact avec
                            parents, élèves, enseignants, personnel administratif, partenaires…</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-info"></i>Communiquer avec vos
                            clients et entretenir une relation directe et quasi instantanée</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-info"></i>Prévenir vos militants
                            d’un évènement important, où qu’ils se trouvent</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-info"></i>Convoquer vos membres aux
                            réunions d’association ou groupement</li>
                    </ul>

                    <!-- Bouton avec hover animé -->
                    <a href="{{ route('ticafrique.demande') }}"
                        class="btn btn-info btn-hover fw-bold px-5 py-2 btn-lg text-white">
                        Commander
                    </a>
                </div>

            </div>
        </div>
    </section>







    <!-- Section Pourquoi choisir TICAFRIQUE -->
    <section class="py-5 mt-5" style="background: linear-gradient(135deg, #93a7c1, #3493e7 80%); color: #fff;">
        <div class="container mb-5">
            <h2 class="text-center text-light mb-4" data-aos="fade-up">
                Pourquoi créer votre compte SMS avec TICAFRIQUE ?
            </h2>
            <div class="row text-center g-4">

                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="100">
                    <i class="fas fa-bolt fa-4x text-info mb-3"></i>
                    <h5 class="fw-bold text-white">Rapidité / Proactivité</h5>
                    <p class="text-white-75">Nous créons votre compte SMS en 10 minutes avec un conseiller dédié.</p>
                </div>

                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <i class="fas fa-people-arrows fa-4x text-info mb-3"></i>
                    <h5 class="fw-bold text-white">Proximité</h5>
                    <p class="text-white-75">Nous sommes toujours aux côtés de nos clients pour mieux comprendre leur
                        réalité.</p>
                </div>

                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="300">
                    <i class="fas fa-toolbox fa-4x text-info mb-3"></i>
                    <h5 class="fw-bold text-white">Système clé en main</h5>
                    <p class="text-white-75">Nous vous donnons tout le nécessaire pour une prise en main rapide.</p>
                </div>

                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <i class="fas fa-headset fa-4x text-info mb-3"></i>
                    <h5 class="fw-bold text-white">Assistance complète</h5>
                    <p class="text-white-75">Nous assurons un service de qualité et répondons à vos attentes.</p>
                </div>

            </div>

            <!-- Centrer le bouton -->
            <div class="text-center mt-4">
                <a href="{{ route('ticafrique.demande') }}" class="btn btn-info mt-2 py-2 px-5 btn-lg text-white fw-bold">
                    Commander
                </a>
            </div>

        </div>
    </section>



    <!-- Message de succès -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulaire de contact -->
    <div class="container my-5">
        <h2 class="text-center text-accent mb-4">
            Voulez-vous tout savoir sur le SMS MARKETING ?
        </h2>

        <form method="POST" action="{{ route('ticafrique.store_contact') }}">
            @csrf

            <div class="row g-4">
                <!-- Colonne gauche : inputs + bouton -->
                <div class="col-md-6 d-flex flex-column gap-3">
                    <!-- Nom -->
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" placeholder="Nom complet" value="{{ old('name') }}" required>
                        <label for="name">Nom</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" placeholder="exemple@mail.com" value="{{ old('email') }}" required>
                        <label for="email">E-mail</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Téléphone -->
                    <div class="form-floating">
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone"
                            name="phone" placeholder="+225 2522002077" value="{{ old('phone') }}" required>
                        <label for="phone">Téléphone</label>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Bouton -->
                    <button type="submit" class="btn btn-accent w-100 py-2 mt-2" id="submit">Envoyer</button>
                </div>

                <!-- Colonne droite : textarea -->
                <div class="col-md-6">
                    <div class="form-floating h-100">
                        <textarea class="form-control @error('message') is-invalid @enderror h-100" id="message" name="message"
                            placeholder="Votre message..." required>{{ old('message') }}</textarea>
                        <label for="message">Message</label>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </form>

    </div>



    <!-- Carousel Start -->
    {{-- <div class="container-fluid px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>

            <!-- Carousel items -->
            <div class="carousel-inner">
                <!-- First slide -->
                <div class="carousel-item active">
                    <img src="site/img/Sms3.png" class="d-block w-100 carousel-img" alt="First slide">

                    <div class="carousel-caption d-none d-md-block">
                        <div class="container">
                            <h6 class="text-secondary h4 animated fadeInUp">Best IT Solutions</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">An Innovative IT Solutions Agency
                            </h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">
                                Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam
                                dolor eget urna ultricies tincidunt.
                            </p>
                            <a href="#"><button
                                    class="btn btn-primary rounded-pill px-4 py-3 animated fadeInLeft">Read
                                    More</button></a>
                            <a href="#"><button
                                    class="btn btn-primary rounded-pill px-4 py-3 animated fadeInRight">Contact
                                    Us</button></a>
                        </div>
                    </div>
                </div>

                <!-- Second slide -->
                <div class="carousel-item">
                    <img src="site/img/Sms3.png" class="d-block w-100 carousel-img" alt="First slide">

                    <div class="carousel-caption d-none d-md-block">
                        <div class="container">
                            <h6 class="text-secondary h4 animated fadeInUp">Best IT Solutions</h6>
                            <h1 class="text-white display-1 mb-4 animated fadeInLeft">Quality Digital Services You Really
                                Need!</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">
                                Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam
                                dolor eget urna ultricies tincidunt.
                            </p>
                            <a href="#"><button
                                    class="btn btn-primary rounded-pill px-4 py-3 animated fadeInLeft">Read
                                    More</button></a>
                            <a href="#"><button
                                    class="btn btn-primary rounded-pill px-4 py-3 animated fadeInRight">Contact
                                    Us</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> --}}
    <!-- Carousel End -->



    <!-- Fact Start -->
    {{-- <div class="container-fluid bg-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">99</h1>
                        <h5 class="text-white mt-1">Success in getting happy customer</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">25</h1>
                        <h5 class="text-white mt-1">Thousands of successful business</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">120</h1>
                        <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex counter">
                        <h1 class="me-3 text-primary counter-value">5</h1>
                        <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Fact End -->


    <!-- About Start -->
    {{-- <div class="container-fluid py-5 my-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="site/img/about-1.jpg" class="img-fluid w-75 rounded" alt=""
                            style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="site/img/about-2.jpg" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">About Us</h5>
                    <h1 class="mb-4">About HighTech Agency And It's Innovative IT Solutions</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus ut interdum.
                        Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo
                        cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque
                        quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus. Etiam gravida justo
                        nec erat vestibulum, et malesuada augue laoreet.</p>
                    <p class="mb-4">Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit
                        amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin
                        scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus.</p>
                    <a href="" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- About End -->


    <!-- Services Start -->
    {{-- <div class="container-fluid services py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Services</h5>
                <h1>Services Built Specifically For Your Business</h1>
            </div>
            <div class="row g-5 services-inner">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-code fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Web Design</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                                    interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-file-code fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Web Development</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                                    interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-external-link-alt fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">UI/UX Design</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                                    interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fas fa-user-secret fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Web Cecurity</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                                    interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-envelope-open fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Digital Marketing</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                                    interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fas fa-laptop fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Programming</h4>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut
                                    interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Services End -->


    <!-- Project Start -->
    {{-- <div class="container-fluid project py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Project</h5>
                <h1>Our Recently Completed Projects</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="site/img/project-1.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Web design</h4>
                                    <p class="m-0 text-white">Web Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="site/img/project-2.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Cyber Security</h4>
                                    <p class="m-0 text-white">Cyber Security Core</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="site/img/project-3.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Mobile Info</h4>
                                    <p class="m-0 text-white">Upcomming Phone</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="site/img/project-4.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Web Development</h4>
                                    <p class="m-0 text-white">Web Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="site/img/project-5.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">Digital Marketing</h4>
                                    <p class="m-0 text-white">Marketing Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="site/img/project-6.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">keyword Research</h4>
                                    <p class="m-0 text-white">keyword Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Project End -->


    <!-- Blog Start -->
    {{-- <div class="container-fluid blog py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Blog</h5>
                <h1>Latest Blog & News</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="site/img/blog-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                            style="top: -28px; right: 20px;">Web Design</span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3"
                            style="margin-top: -75px;">
                            <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                <a href="" class="btn text-white">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                </div>
                                <div class="blog-icon-2">
                                    <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                    <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="site/img/admin.jpg"
                                class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="">By Daniel Martin</h5>
                            <span class="text-secondary">24 March 2023</span>
                            <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                                Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="" class="text-white"><small><i
                                        class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                            <a href="" class="text-white"><small><i
                                        class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="site/img/blog-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                            style="top: -28px; right: 20px;">Development</span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3"
                            style="margin-top: -75px;">
                            <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                <a href="" class="btn text-white ">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                </div>
                                <div class="blog-icon-2">
                                    <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                    <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="site/img/admin.jpg"
                                class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="">By Daniel Martin</h5>
                            <span class="text-secondary">23 April 2023</span>
                            <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                                Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="" class="text-white"><small><i
                                        class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                            <a href="" class="text-white"><small><i
                                        class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="blog-item position-relative bg-light rounded">
                        <img src="site/img/blog-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                        <span class="position-absolute px-4 py-3 bg-primary text-white rounded"
                            style="top: -28px; right: 20px;">Mobile App</span>
                        <div class="blog-btn d-flex justify-content-between position-relative px-3"
                            style="margin-top: -75px;">
                            <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                <a href="" class="btn text-white ">Read More</a>
                            </div>
                            <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                <div class="blog-icon-1">
                                    <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                </div>
                                <div class="blog-icon-2">
                                    <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                    <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                    <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                            <img src="site/img/admin.jpg"
                                class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                            <h5 class="">By Daniel Martin</h5>
                            <span class="text-secondary">30 jan 2023</span>
                            <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum.
                                Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                        </div>
                        <div
                            class="blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                            <a href="" class="text-white"><small><i
                                        class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                            <a href="" class="text-white"><small><i
                                        class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->


    <!-- Team Start -->
    {{-- <div class="container-fluid py-5 mb-5 team">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Team</h5>
                <h1>Meet our expert Team</h1>
            </div>
            <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="site/img/team-1.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="site/img/team-2.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="site/img/team-3.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded team-item">
                    <div class="team-content">
                        <div class="team-img-icon">
                            <div class="team-img rounded-circle">
                                <img src="site/img/team-4.jpg" class="img-fluid w-100 rounded-circle" alt="">
                            </div>
                            <div class="team-name text-center py-3">
                                <h4 class="">Full Name</h4>
                                <p class="m-0">Designation</p>
                            </div>
                            <div class="team-icon d-flex justify-content-center pb-4">
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->

    <!-- Testimonial Start -->
    {{-- <div class="container-fluid testimonial py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Testimonial</h5>
                <h1>Our Client Saying!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="site/img/testimonial-1.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam
                            dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam
                            mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="site/img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam
                            dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam
                            mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="site/img/testimonial-3.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam
                            dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam
                            mi.</p>
                    </div>
                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="site/img/testimonial-4.jpg" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                                <i class="fas fa-star me-1 text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="border-top mt-4 pt-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam
                            dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam
                            mi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Testimonial End -->


    <!-- Contact Start -->
    {{-- <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Get In Touch</h5>
                <h1 class="mb-3">Contact for any query</h1>
                <p class="mb-2">The contact form is currently inactive. Get a functional and working contact form
                    with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done.
                    <a href="https://htmlcodex.com/contact-form">Download Now</a>.
                </p>
            </div>
            <div class="contact-detail position-relative p-5">
                <div class="row g-5 mb-5 justify-content-center">
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Address</h4>
                                <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">23
                                    rank Str, NY</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Call Us</h4>
                                <a class="h5" href="tel:+0123456789" target="_blank">+012 3456 7890</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Email Us</h4>
                                <a class="h5" href="mailto:info@example.com" target="_blank">info@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="p-5 h-100 rounded contact-map">
                            <iframe class="rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="p-5 rounded contact-form">
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Your Name">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control border-0 py-3" placeholder="Your Email">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Project">
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message"></textarea>
                            </div>
                            <div class="text-start">
                                <button class="btn bg-primary text-white py-3 px-5" type="button">Send
                                    Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Contact End -->

@endsection
