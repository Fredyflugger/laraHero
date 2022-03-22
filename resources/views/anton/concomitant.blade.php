<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ secure_asset('/css/concomitant_styles/main.css') }}">
    <title>Concomitant - BEM</title>
</head>

<body>
    <div class="container" id="test">
        <div class="b-header">
            <div class="b-header__topBorder"></div>
            <div class="b-header__headWrap">
                <div class="b-logo b-header__logo">
                    <h1 class="b-logo__logoText">CONCOMITANT</h1>
                    <p class="b-logo__fluff">Free PSD Website Template</p>
                </div>
                <div class="b-header__interactiveWrap">
                    <div class="b-icons b-header__icons">
                        <div class="b-icons__iconsWrap b-icons_blueBgHover">
                            <a href="#"><i class="b-icons__iconItem fab fa-linkedin-in b-icons__iconItem_iconPosition"></i></a>
                        </div>
                        <div class="b-icons__iconsWrap b-icons_blueBgHover">
                            <a href="#"><i class="b-icons__iconItem fab fa-twitter b-icons__iconItem_iconPosition"></i></a>
                        </div>
                        <div class="b-icons__iconsWrap b-icons_blueBgHover">
                            <a href="#"><i class="b-icons__iconItem fab fa-pinterest b-icons__iconItem_iconPosition"></i></a>
                        </div>
                        <div class="b-icons__iconsWrap b-icons_blueBgHover">
                            <a href="#"><i class="b-icons__iconItem fab fa-google-plus-g b-icons__iconItem_iconPosition"></i></a>
                        </div>
                        <div class="b-icons__iconsWrap b-icons_blueBgHover">
                            <a href="#"><i class="b-icons__iconItem fas fa-rss b-icons__iconItem_iconPosition"></i></a>
                        </div>
                    </div>
                    <div class="b-accountRSS b-header__accountRSS">
                        <a href="#" class="b-accountRSS__link b-textHover">Sign Up</a>
                        <span class="b-accountRSS__verticalStick">|</span>
                        <a href="#" class="b-accountRSS__link b-textHover">Login</a>
                        <span class="b-accountRSS__verticalStick">|</span>
                        <a href="#" class="b-accountRSS__link b-textHover">RSS Feeds</a>
                        <span class="b-accountRSS__verticalStick">|</span>
                        <a href="#" class="b-accountRSS__link b-textHover">Archived News</a>
                    </div>
                </div>
            </div>
            <div class="b-header__mainNavBar b-mainNavBar">
                <ul class="b-mainNavBar__linkList b-linkList">
                    <li class="b-linkList__listItem"><a href="#" class="b-linkList__link b-textHover">HOMEPAGE</a></li>
                    <li class="b-linkList__listItem"><a href="#" class="b-linkList__link b-textHover">STYLE DEMO</a></li>
                    <li class="b-linkList__listItem"><a href="#" class="b-linkList__link b-textHover">FULL WIDTH</a></li>
                    <li class="b-linkList__listItem"><a href="#" class="b-linkList__link b-textHover">PORTFOLIO</a></li>
                    <li class="b-linkList__listItem"><a href="#" class="b-linkList__link b-textHover">GALLERY</a></li>
                    <li class="b-linkList__listItem"><a href="#" class="b-linkList__link b-textHover">DROPDOWN</a></li>
                </ul>
                <form action="#" class="b-mainNavBar__searchForm b-searchForm">
                    <input type="text" placeholder="Search Our Website..." class="b-searchForm__input b_searchinput">
                    <button type="submit" class="b-searchForm__searchButton b-searchButton">
                        <span class="b-searchButton__text">search</span>
                    </button>
                </form>
            </div>
        </div>
        <div class="b-slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="https://via.placeholder.com/880x360?text=One" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/880x360?text=Two" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/880x360?text=Three" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/880x360?text=Four" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/880x360?text=Five" alt="Third slide">
                  </div>
                </div>
            </div>
            <div class="carouselControls" data-ride="carousel">
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="b-services b-adaptiveGrid">
                <div class="b-services__gridElement b-gridElement">
                        <img src="{{ asset('img/concomitant_img/icon-group.png') }}" alt="iconGroup" class="b-gridElement__icon">
                        <h2 class="b-gridElement__header">Vivamuslibero Augue</h2>
                        <p class="b-gridElement__text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. 
                            In fringilla massa ut nisi ullamcorper pellentesque.
                        </p>
                    </div>
            <div class="b-services__gridElement b-gridElement">
                    <img src="{{ asset('img/concomitant_img/icon-globe.png') }}" alt="iconGlobe" class="b-gridElement__icon">
                    <h2 class="b-gridElement__header">Vivamuslibero Augue</h2>
                    <p class="b-gridElement__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. 
                        In fringilla massa ut nisi ullamcorper pellentesque.
                    </p>
                </div>
            <div class="b-services__gridElement b-gridElement">
                    <img src="{{ asset('img/concomitant_img/icon-cogs.png') }}" alt="iconCogs" class="b-gridElement__icon">
                    <h2 class="b-gridElement__header">Vivamuslibero Augue</h2>
                    <p class="b-gridElement__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. 
                        In fringilla massa ut nisi ullamcorper pellentesque.
                    </p>
                </div>
            <div class="b-services__gridElement b-gridElement">
                <img src="{{ asset('img/concomitant_img/icon-leaf.png') }}" alt="iconLeaf" class="b-gridElement__icon">
                <h2 class="b-gridElement__header">Vivamuslibero Augue</h2>
                <p class="b-gridElement__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. 
                    In fringilla massa ut nisi ullamcorper pellentesque.
                </p>
            </div>
        </div>
        <hr class="b-horLine">
        <div class="b-latestWorks b-adaptiveGrid">
                <div class="b-latestWorks__gridElement b-gridElement">
                        <img src="{{ asset('img/concomitant_img/RectangleWorks.png') }}" alt="rectangle" class="b-latestWorks__picture">
                        <h2 class="b-latestWorks__header">Project Title</h2>
                        <p class="b-latestWorks__text">
                                Portortornec condimenterdum eget consectetuer condis consequam 
                                pretium pellus sed mauris enim. Puruselit mauris nulla 
                                hendimentesque elit semper nam a sapien urna sempus.
                        </p>
                        <a href="#" class="b-latestWorks__details b-textHover">View Details »</a>
                </div>
                <div class="b-latestWorks__gridElement b-gridElement">
                        <img src="{{ asset('img/concomitant_img/RectangleWorks.png') }}" alt="rectangle" class="b-latestWorks__picture">
                        <h2 class="b-latestWorks__header">Project Title</h2>
                        <p class="b-latestWorks__text">
                                Portortornec condimenterdum eget consectetuer condis consequam 
                                pretium pellus sed mauris enim. Puruselit mauris nulla 
                                hendimentesque elit semper nam a sapien urna sempus.
                        </p>
                        <a href="#" class="b-latestWorks__details b-textHover">View Details »</a>
                </div>
                <div class="b-latestWorks__gridElement b-gridElement">
                        <img src="{{ asset('img/concomitant_img/RectangleWorks.png') }}" alt="rectangle" class="b-latestWorks__picture">
                        <h2 class="b-latestWorks__header">Project Title</h2>
                        <p class="b-latestWorks__text">
                                Portortornec condimenterdum eget consectetuer condis consequam 
                                pretium pellus sed mauris enim. Puruselit mauris nulla 
                                hendimentesque elit semper nam a sapien urna sempus.
                        </p>
                        <a href="#" class="b-latestWorks__details b-textHover">View Details »</a>
                </div>
                <div class="b-latestWorks__gridElement b-gridElement">
                        <img src="{{ asset('img/concomitant_img/RectangleWorks.png') }}" alt="rectangle" class="b-latestWorks__picture">
                        <h2 class="b-latestWorks__header">Project Title</h2>
                        <p class="b-latestWorks__text">
                                Portortornec condimenterdum eget consectetuer condis consequam 
                                pretium pellus sed mauris enim. Puruselit mauris nulla 
                                hendimentesque elit semper nam a sapien urna sempus.
                        </p>
                        <a href="#" class="b-latestWorks__details b-textHover">View Details »</a>
                </div>
        </div>
        <div class="b-footer b-footer_grid b-adaptiveGrid">
            <div class="b-footer__footerElement">
                <h2 class="b-footer__header b-footerElement__header">CONTACT DETAILS</h2>
                <p class="b-footer__text">Convallisijusto vestas mus pellentum aenean sapibulum in aliquam volut pat integest nulla.</p>
                <span class="b-footer__text">Tel: xxxxx xxxxxxxxxx</span>
                <span class="b-footer__text">Fax: xxxxx xxxxxxxxxx</span>
                <span class="b-footer__text">Email: contact@mydomain.com</span>
            </div>
            <div class="b-footer__footerElement">
                <h2 class="b-footer__header b-footerElement__header">QUICK LINKS</h2>
                <a href="#" class="b-footer__text b-footer__quickText b-textHover">Link Text Here</a>
                <hr class="b-footer__horLine">
                <a href="#" class="b-footer__text b-footer__quickText b-textHover">Link Text Here</a>
                <hr class="b-footer__horLine">
                <a href="#" class="b-footer__text b-footer__quickText b-textHover">Link Text Here</a>
                <hr class="b-footer__horLine">
                <a href="#" class="b-footer__text b-footer__quickText b-textHover">Link Text Here</a>
                <hr class="b-footer__horLine">
            </div>
            <div class="b-footer__footerElement">
                <h2 class="b-footer__header b-footerElement__header">FROM THE BLOG</h2>
                <span class="b-footer__specialSnowflakeText">Blog Post Title</span> <br>
                <span class="b-footer__text">Posted by Admin on 00.00.0000</span>
                <p class="b-footer__text">
                    Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean 
                    elit intesque sed facilispede estibulum.
                </p>
                <a href="#" class="b-latestWorks__details b-textHover">Read More »</a>
            </div>
            <div class="b-footer__footerElement">
                <h2 class="b-footer__header b-footerElement__header">GRAB OUR NEWSLETTER</h2>
                <form action="#" class="b-footer__submitForm">
                    <input type="text" class="b-submitForm__input b-submitForm__name" placeholder="Name">
                    <input type="email" class="b-submitForm__input b-submitForm__mail" placeholder="Email">
                    <button type="submit" class="b-submitForm__submit">SUBMIT</button>
                </form>
            </div>
        </div>
        <div class="b-copyright">
            <span class="b-copyright__text">Copyright © 2013 - All Rights Reserved - Domain Name</span>
            <span class="b-copyright__text">Template by OS Templates</span>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>