<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ trans('sentence.my_name') }}</title>
    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <!-- My Styles -->
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style.css') }}" />
</head>

<body>
    <div class="container">
        <div class="li-wrapper">
            <li class="nav-item dropdown language">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" 
                    href="#" role="button" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ trans('sentence.language') }}
                    <span class="caret"></span>
                </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="lang/en">English</a>
                        <a class="dropdown-item" href="lang/ru">Русский</a>
                    </div>
            </li> 
        </div>
        <div class="buttons">
            <a href="https://github.com/Fredyflugger" class="btn-flip" data-back="GitHub" data-front="GitHub"></a>
            <a href="https://vk.com/fflugger" class="btn-flip" data-back="{{ trans('sentence.vk') }}" data-front="{{ trans('sentence.vk') }}"></a>
            <a href="https://t.me/fredyflugger" class="btn-flip" data-back="Telegram" data-front="Telegram"></a>
            <a href="#" class="btn-flip" data-back="{{ trans('sentence.out_of_order') }}" data-front="{{ trans('sentence.button') }}"></a>
        </div>
        <div class="aboutMe">
            <div class="photo">
                <img class="myPhoto" src="{{ secure_asset('img/doge.jpg') }}" alt="doge">
                <span>{{ trans('sentence.my_name') }}</span>
            </div>
            <div class="desc">
                <ul>
                    <li class="liHeader">{{ trans('sentence.skills') }}:</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Sass</li>
                    <li>PHP</li>
                    <li>JavaScript</li>
                    <li>SQL</li>
                </ul>
                <ul>
                    <li class="liHeader">{{ trans('sentence.instruments') }}:</li>
                    <li>Visual Studio Code</li>
                    <li>MySQLWorkbench</li>
                    <li>Bootstrap</li>
                    <li>Github</li>
                    <li>Figma</li>
                    <li>Laravel</li>
                </ul>
            </div>
        </div>
        <div class="grid">
            <div class="cell">test</div>
            <div class="cell">test</div>
            <div class="cell">test</div>
            <div class="cell">test</div>
            <div class="cell">test</div>
        </div>
    </div>
</body>
<!-- <script type="text/javascript" src="{{ url('js/script.js') }}"></script> -->
<!-- Scripts -->
<script src="{{ secure_asset('js/app.js') }}" defer></script>

</html>

<!-- secure_asset !!!! -->