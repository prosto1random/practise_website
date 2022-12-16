<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/phones_section.css">
    <link rel="stylesheet" href="css/watch_section.css">
    <link rel="stylesheet" href="css/footer.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css">
    <script src="/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


    <title>Home_page</title>
</head>
<body>
<div class="desktop_interface">
    <section class = "background">

        <x-header></x-header>

        <div class="on_top_image">
            <img src="img/ie_galaxy_buds_live_r180_sm_r180nznaeua_frontmysticbronze_296154303.png" alt="">
        </div>

        <x-home></x-home>
    </section>

    <x-phones_section></x-phones_section>

    <x-watch_section></x-watch_section>

    <x-footer></x-footer>
</div>
<div class="mobile_interface">

</div>
</body>
</html>
