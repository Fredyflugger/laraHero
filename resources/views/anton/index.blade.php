<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ trans('sentence.my_name') }}</title>
    <!-- Styles -->
    <!-- My Styles -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ mix('/css/style.css') }}" /> -->
    <?php include public_path('css/style.css') ?>
</head>

<body>
    <!-- Header -->
    <div class="bfh">
        <div class="dropdown">
            <div class="langbtn">
                @if (Lang::locale() == 'en')
                    English
                @elseif (Lang::locale() == 'ru')
                    Русский
                @endif
            </div>
            <div class="dropdown-content">
                @if (Lang::locale() == 'en')
                    <a class="dropdown-item" href="lang/ru">Русский</a>
                @elseif (Lang::locale() == 'ru')
                    <a class="dropdown-item" href="lang/en">English</a>
                @endif
            </div>
        </div>
        <div class="mobile_photo"></div> 
        <div class="memyselfandi">
            <p class="my_name">{{ trans('sentence.my_name') }}</p>
            <p class="my_job">frontend/ backend</p>
            <a href="https://t.me/fredyflugger"><img src="{{ secure_asset('img/logos/tg.svg') }}" alt="tg" class="logos"></a>
            <a href="https://github.com/Fredyflugger"><img src="{{ secure_asset('img/logos/github.svg') }}" alt="git" class="logos"></a>
            <a href="https://vk.com/fflugger"><img src="{{ secure_asset('img/logos/vk.svg') }}" alt="vk" class="logos"></a>
            <a href="https://drive.google.com/drive/folders/1EwRkjAmYLGe3QDNjHn_qCh9R-hjWPP2j?usp=sharing"><img src="{{ secure_asset('img/logos/diploma.svg') }}" alt="certs" class="logos"></a>
            <div class="about_me">
                <div class="desc">
                    <ul class="blue skills_ul">
                        <li class="colored_header skills">{{ trans('sentence.skills') }}</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Sass</li>
                        <li>PHP</li> 
                        <li>JavaScript</li>
                        <li>SQL</li>
                    </ul>
                    <ul class="purple">
                        <li class="colored_header instruments">{{ trans('sentence.instruments') }}</li>
                        <li>Visual Studio Code</li>
                        <li>MySQLWorkbench</li>
                        <li>Bootstrap</li>
                        <li>Github</li>
                        <li>Figma</li>
                        <li>Laravel</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mask"></div>
        <div class="grid_wrap">
            <div class="grid_header">
                <span>{{ trans('sentence.projects') }}</span>
            </div>
            <div class="grid_projects">
                <div class="cell_projects">
                <img src="{{ secure_asset('img/projects_thumb/carepoint.png') }}" alt="medicare">
                    <div class="project_link">
                        <a href="{{ URL::route('medicare') }}">Medicare</a>
                        <img src="{{ secure_asset('img/arrow.svg') }}" alt="arrow">
                    </div>
                </div>
                <div class="cell_projects">
                    <img src="{{ secure_asset('img/projects_thumb/concomitant.png') }}" alt="concomitant" class="site_thumbnail">
                    <div class="project_link">
                        <a href="{{ URL::route('concomitant') }}">Concomitant</a>
                        <img src="{{ secure_asset('img/arrow.svg') }}" alt="arrow">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Body -->

</body>
<!-- <script type="text/javascript" src="{{ url('js/script.js') }}"></script> -->
<!-- Scripts -->

<!-- <script type="text/javascript" src="{{ mix('js/app.js') }}"></script> -->

<?php include public_path('js/app.js') ?>

</html>

<!-- secure_asset !!!! -->