<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.cdnfonts.com/css/tajawal" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="">
    <meta name="description" content="" />
    <meta name="googlebot" content="">
    <title>
        هيأه البحث والتطوير الصناعي
    </title>
    <meta name="robots">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Price nouislider-filter cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.css" integrity="sha512-MKxcSu/LDtbIYHBNAWUQwfB3iVoG9xeMCm32QV5hZ/9lFaQZJVaXfz9aFa0IZExWzCpm7OWvp9zq9gVip/nLMg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.1/nouislider.min.js" integrity="sha512-T5Bneq9hePRO8JR0S/0lQ7gdW+ceLThvC80UjwkMRz+8q+4DARVZ4dqKoyENC7FcYresjfJ6ubaOgIE35irf4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

    <div id="app" class="mt-3">


        <nav class="nav">

            <div class="container m-auto nav2">
               

                <div class="logo">
                    <img src="{{ asset('images\logo.png') }}" height="80" width="80">
                </div>
                <div id="mainListDiv" class="main_list mt-2">
                    <ul class="navlinks">
                        <li><a href="#">الصفحه الرئيسيه</a></li>
                        <li><a href="#">عن الهيأه</a></li>
                        <li><a href="#">المؤتمرات والمعارض</a></li>
                        <li><a href="#">المنتجات والخدمات</a></li>
                        <li><a href="#">
                           الخطه التدريبيه
                    </a></li>

                        <li><a href="#">أتصل بنا</a></li>
                    </ul>
                </div>
                <span class="navTrigger mt-sm-4">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </div>
        </nav>
        <main class="py-4">

            @yield('content')
        </main>
        <!-- Jquery needed -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>

        <!-- Function used to shrink nav bar removing paddings and adding black background -->
        <script>
            $(window).scroll(function() {
                if ($(document).scrollTop() > 50) {
                    $('.nav2').addClass('affix');
                    console.log("OK");
                } else {
                    $('.nav2').removeClass('affix');
                }
            });


            $('.navTrigger').click(function() {
                $(this).toggleClass('active');
                console.log("Clicked menu");
                $("#mainListDiv").toggleClass("show_list");
                $("#mainListDiv").fadeIn();

            });
        </script>

</body>




</html>