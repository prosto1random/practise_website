<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/store_things.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css">
    <script src="/css/bootstrap/js/bootstrap.bundle.min.js"></script>

    <title>Store</title>
</head>
<style>
    .store_menu{
        text-shadow: 0 0 20px #C65443;
    }
</style>
<body>
    <section class="background">
        <x-header></x-header>
        <x-store1></x-store1>
    </section>
</body>
</html>









{{--<section class ="store_icons">--}}
{{--    <div class ="icons_img" onclick="itemToggle('iphone')" id="iphone">--}}
{{--        <label>--}}
{{--            <input type="checkbox">--}}
{{--        </label>--}}
{{--        <img src="img/115-1157174_46mm-galaxy-watch-in-silver-on-left-with%201.png" alt="">--}}
{{--        <h5>--}}
{{--            Galaxy Watch 5 series--}}
{{--        </h5>--}}
{{--    </div>--}}

<script>
    var cart = {}

    var prices = {
        'iphone' : 300,
        'z_flip' : 400,
    }

    function itemToggle(key){
        console.log('lala')
        let element = document.getElementById(key)
        if(cart[key] && cart[key] === true) {
            cart[key] = false
            element.classList.remove('chosen')
        }
        else{
            cart[key] = true
            element.classList.add('chosen')
        }
    }
</script>
