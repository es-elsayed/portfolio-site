@php
$name = "Islam Abd-Elkader"
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="I'm Islam Abd-Elkader, A Full Stack Developer, with very good experience in programming especially in web development, ambitious, and I'm always trying to develop myself and develop where I belong. Looking to work in an environment that encourages me to succeed and grow professionally where I can utilize my skills and knowledge appropriately.">
    <meta name="keywords"
        content="HTML, CSS, JavaScript, Bootstrap, Developer, PHP, Laravel, Web Developer, Islam, Islam Abdu, Islam Abdelkader, Islam Abd-Elkader">
    <meta name="author" content="{{ $name }}">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="assets/site/css/swiper-bundle.min.css">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="assets/site/css/styles.css">

    <!--==================== Icon ====================-->
    <link rel="icon" href="assets/site/img/personal/logo.svg">

    <title>{{ $name }}</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Islam</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i>Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">
                            <i class="uil uil-user nav__icon"></i>About
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i>Skills
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#services" class="nav__link">
                            <i class="uil uil-briefcase-alt nav__icon"></i>Services
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#portfolio" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i>Portfolio
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class="uil uil-message nav__icon"></i>Contact
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
        <x-alert />
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <x-site.portfolio.sections.home />

        <x-site.portfolio.sections.about />

        <x-site.portfolio.sections.skills />

        <x-site.portfolio.sections.qualification />

        <x-site.portfolio.sections.services />

        <x-site.portfolio.sections.portfolio />

        <x-site.portfolio.sections.project />

        <x-site.portfolio.sections.testimonial />

        <x-site.portfolio.sections.contact />
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Islam</h1>
                    <span class="footer__subtitle">Full Stack Developer</span>
                </div>
                <ul class="footer__links">
                    <li class="footer__link">Services</li>
                    <li class="footer__link">Portfolio</li>
                    <li class="footer__link">Contact</li>
                </ul>
                <div class="footer__socials">
                    <a href="https://www.facebook.com/Islam.3bdu" target="_blank" class="footer__social">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/islam.3bdu/" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://twitter.com/Islam3bdu" target="_blank" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer__copy">&#169; Islam. All right reserved</p>
        </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="assets/site/js/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="assets/site/js/main.js"></script>
</body>

</html>
