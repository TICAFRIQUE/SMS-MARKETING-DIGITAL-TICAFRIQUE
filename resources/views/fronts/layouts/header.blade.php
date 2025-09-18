<!-- Topbar Start -->
<div class="container-fluid py-2 d-none d-md-flex" style="background: linear-gradient(90deg, #434e9e, #104c89);">
    <div class="container d-flex justify-content-between align-items-center flex-wrap gap-2">

        <!-- Coordonnées -->
        <div class="d-flex flex-wrap gap-3 align-items-center">
            <small style="color:#ffffff;">
                <i class="fas fa-map-marker-alt me-2" style="color:#e7e7e7;"></i> Cocody-Angré, Cité Belles Fleurs 3
            </small>
            <small style="color:#ffffff;">
                <i class="fas fa-envelope me-2" style="color:#f3f3f3;"></i> info@ticafrique.com
            </small>
        </div>

        <!-- Slogan -->
        <small class="d-none d-xl-block fst-italic" style="color:#ffffff;">
            « Nous vous aidons à développer votre entreprise »
        </small>

        <!-- Réseaux sociaux -->
        <div class="d-flex gap-2">
            <a href="https://www.facebook.com/ticafrique" target="_blank"
                class="btn btn-sm btn-light rounded-circle social-icon pulse" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://x.com/ticafrique" target="_blank"
                class="btn btn-sm btn-light rounded-circle social-icon pulse" aria-label="Twitter">
                <i class="bi bi-twitter-x"></i>
            </a>
            <a href="https://www.instagram.com/ticafrique" target="_blank"
                class="btn btn-sm btn-light rounded-circle social-icon pulse" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/ticafrique" target="_blank"
                class="btn btn-sm btn-light rounded-circle social-icon pulse" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>

    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-dark-blue shadow-sm sticky-top">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-1">

            <!-- Logo -->
            <a href="{{ route('ticafrique.index') }}" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('site/img/logo.jpg') }}" alt="Logo TicAfrique"
                    style="height:55px; object-fit: cover;" class="me-2">

            </a>

            <!-- Toggle mobile -->
            <button type="button" class="navbar-toggler border-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-0 text-center text-lg-start">
                    <a href="{{ route('ticafrique.index') }}" class="nav-item nav-link nav-accent">Accueil</a>
                    <a href="{{ route('ticafrique.sms') }}" class="nav-item nav-link ">SMS</a>
                    <a href="{{ route('ticafrique.way') }}" class="nav-item nav-link">2Away</a>
                    <a href="{{ route('ticafrique.sms_voice') }}" class="nav-item nav-link">SMS Vocal</a>
                    <a href="#" class="nav-item nav-link d-none">Les concernés</a>
                    <a href="{{ route('ticafrique.contact') }}" class="nav-item nav-link">Contact</a>
                    <a href="https://portail2.ticafrique.ci/" class="nav-item nav-link" target="_blank">Portail</a>
                </div>
            </div>

            <!-- Contact & téléphone (Desktop XL) -->
            <div class="d-none d-xl-flex flex-shrink-0 align-items-center gap-3 ms-3">
                <div class="d-flex flex-column pe-4 border-end">
                    <span class="text-light small">Vous avez des questions ?</span>
                    <span class="fw-bold text-accent">+225 25 22 00 20 77</span>
                </div>
                <!-- Icône téléphone -->
                <a href="tel:+2252522002077" class="ms-3">
                    <i class="bi bi-telephone-fill fa-2x text-light"></i>
                </a>
            </div>

        </nav>
    </div>
</div>
<!-- Navbar End -->
