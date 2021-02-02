<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <!-- My Styles -->
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style.css') }}" />
</head>

<body>
    <div class="container">
        <a href="https://github.com/Fredyflugger" class="btn-flip" data-back="GitHub" data-front="GitHub"></a>
        <a href="#" class="btn-flip" data-back="Vkontakte" data-front="Vkontakte"></a>
        <a href="#" class="btn-flip" data-back="Telegram" data-front="Telegram"></a>
        <a href="#" class="btn-flip" data-back="Test" data-front="NotTest"></a>
        <div class="tmp">
            <p>HTML, CSS, Sass, PHP, JavaScript, SQL</p>
            <p>Visual Studio Code, MySQLWorkbench, Bootstrap, Github, Figma, Laravel</p>
            <img src="{{ asset('img/doge.jpg') }}" alt="doge">
        </div>
    </div>
</body>
<!-- <script type="text/javascript" src="{{ url('js/script.js') }}"></script> -->
<!-- Scripts -->
<script src="{{ secure_asset('js/app.js') }}" defer></script>

</html>