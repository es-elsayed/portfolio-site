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
    <!--==================== Boxicons ====================-->
    {{-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> --}}
    <link rel="stylesheet" href="assets/site/css/icons.css">

    <x-site.portfolio._styles />

    <title>{{ $name }}</title>
</head>

<body>
    <x-portfolio.header />
    <!--==================== MAIN ====================-->
    <main class="main">
        <x-site.portfolio.sections.home />

        <x-site.portfolio.sections.about />

        <x-site.portfolio.sections.skills />

        <x-site.portfolio.sections.qualification />

        <x-site.portfolio.sections.services />

        <x-site.portfolio.sections.portfolio />

        <x-site.portfolio.sections.project />

        {{-- <x-site.portfolio.sections.testimonial /> --}}

        <x-site.portfolio.sections.contact />
    </main>

    <!--==================== FOOTER ====================-->
    <x-site.portfolio.sections.footer />


    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="bx bx-up-arrow-alt bx-tada scrollup__icon"></i>
    </a>
    <x-site.portfolio._scripts />
</body>

</html>
