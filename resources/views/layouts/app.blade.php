<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.cdnfonts.com/css/tajawal" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="{{  asset('front_asset/css/bootstrap-ar.min.css')}}" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- jquery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Price nouislider-filter cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.css" integrity="sha512-MKxcSu/LDtbIYHBNAWUQwfB3iVoG9xeMCm32QV5hZ/9lFaQZJVaXfz9aFa0IZExWzCpm7OWvp9zq9gVip/nLMg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js" integrity="sha512-T5Bneq9hePRO8JR0S/0lQ7gdW+ceLThvC80UjwkMRz+8q+4DARVZ4dqKoyENC7FcYresjfJ6ubaOgIE35irf4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
</style>
<!--OWL Carousel slider-->
<link rel="stylesheet" href="{{  asset('css/owl.carousel.css')}}" type="text/css">
<link rel="stylesheet" href="{{  asset('css/owl.transitions.css')}}" type="text/css">
<!--slick-slider -->
<link href="{{  asset('css/slick.css')}}" rel="stylesheet">
<!--bootstrap-slider -->
<link href="{{  asset('css/bootstrap-slider.min.css')}}" rel="stylesheet">
<!--FontAwesome Font Style -->

<link href="{{  asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{  asset('css/style-ar.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="">
    <meta name="description" content="" />
    <meta name="googlebot" content="">
    <title>
        ???????? ?????????? ???????????????? ??????????????
    </title>
    <meta name="robots">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="100x100" href="{{ asset('images\icon.png') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('./css/app.css') }}" rel="stylesheet">


</head>

<body>

    <div id="app">

    <button class="btn buttonfix">
    <i class="fa-solid fa-arrow-up  "  style="color:#eb9937;font-size:20px"></i>
</button>
        <nav class="nav pt-0 pt-md-4 ">

            <div class="container  m-auto nav2">


            <div class="logo">
                    <img src="{{ asset('images\logo.png') }}" height="80" width="80">
                </div>
                <div id="mainListDiv" class="main_list mt-2">
                    <ul class="navlinks">
                        <li><a href="#">???????????? ????????????????</a></li>
                        <li><a href="#">???? ????????????</a></li>
                        <li><a href="#">?????????????????? ????????????????</a></li>
                        <li><a href="#">???????????????? ????????????????</a></li>
                        <li><a href="#">
                                ?????????? ??????????????????
                            </a></li>

                        <li><a href="#">???????? ??????</a></li>
                    </ul>
                </div>
              
                <span class="navTrigger mt-sm-4">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </div>
        </nav>
        <main class="mt-4">

            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="widget1">
                            <i class="fa-thin fa-address-card"></i>
                            <h5>
                                ???? ??????
                            </h5>
                            <p>
                                <i class="fa fa-map-marker"></i>
                                <span> ????????????????, Baghdad, Iraq
                                </span> City, Country
                            </p>
                            <p>
                                <i class="fa fa-phone"></i>
                                +964 790 286 7211
                            </p>
                            <p>
                                <i class="fa fa-envelope"></i>
                                <a href="#">
                                    media@crid.gov.iq</a>
                            </p>

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="widget2">
                            <h5>
                                ?????? ?????????????? </h5>
                            <div class="media">
                                <img class="img-fluid" src="{{asset('images/1029.jpg')}}" alt="">
                                <div class="media-body d-flex align-self-center">
                                    <div class="content">
                                        <a href="#">
                                            <p>
                                                ???????? ?????????? ???????????????? ?????????????? ?????????? ???? ?????????????? ???????? ?????????? ????????????????
                                            </p>
                                        </a>
                                        <span>
                                            ??????????????: 28-02-2023
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <img class="img-fluid" src="{{asset('images/1032.jpg')}}" alt="">
                                <div class="media-body d-flex align-self-center">
                                    <div class="content">
                                        <a href="#">
                                            <p>
                                                ???????? ?????????? ???????????????? ?????????????? ?????????? ???????????? ???????????? ???????????????? ?????????????? ?????????????????????? </p>
                                        </a>
                                        <span>
                                            ??????????????: 28-02-2023
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="widget3">
                            <h5>
                                <i class="bi bi-bookmarks"></i>
                                ?????????? ????????
                            </h5>
                            <ul>
                                <li><a href="#">???????????? ????????????????</a></li>
                                <li><a href="#">???? ????????????</a></li>
                                <li><a href="#">?????????????????? ????????????????</a></li>
                                <li><a href="#">???????????????? ????????????????</a></li>
                                <li><a href="#">
                                        ?????????? ??????????????????
                                    </a></li>

                                <li><a href="#">???????? ??????</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="widget4">
                            <div class="logo">
                                <img src="{{ asset('images\logo.png') }}" class="img-fluid" alt="" height="130" width="130">

                            </div>
                            <div class="socialLinks">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyRightArea">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p>&copy; Copyright All rights reserved 2023.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="news-container">
            <div class="title">
?????? ??????
        </div>

            <ul>
                <li>

                    ???? ?????????? ???????????? ???????????? ???????????? ?????????????? ???????????????? ???????? 2022
                </li>

                <li>
                    ???? ?????????? ???????????? ???????????? ???????????? ?????????????? ???????????????? ???????? 2022
                </li>

                <li>
                    ???? ?????????? ???????????? ???????????? ???????????? ?????????????? ???????????????? ???????? 2022 </li>
            </ul>
        </div>


        <!-- Jquery needed -->
<!-- Scripts --> 

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script> 
<script src="{{asset('js/interface.js')}}"></script> 
<!--bootstrap-slider-JS--> 
<script src="{{asset('js/bootstrap-slider.min.js')}}"></script> 
<!--Slider-JS--> 
<script src="{asset('js/scripts.js')}}"></script>

<script src="{{asset('js/slick.min.js')}}"></script> 
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


</body>




</html>