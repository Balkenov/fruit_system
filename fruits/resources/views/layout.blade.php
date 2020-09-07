<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/skel.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/style-wide.css" />

    <title>No Sidebar - Phase Shift by TEMPLATED</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

{{--    <script src="/js/jquery.min.js"></script>--}}

    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>

{{--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.dropotron/1.4.3/jquery.dropotron.min.js"></script>--}}
{{--    <script src="/jquery.dropotron.min.js"></script>--}}

    <script src="/js/skel.min.js"></script>
{{--    <script src="/js/skel-layers.min.js"></script>--}}
    <script src="js/init.js"></script>

</head>

<body>

<!-- Wrapper -->
<div class="wrapper style1">

    <div id="header" class="skel-panels-fixed">
        <div id="logo">
            <h1><a href="/">Fruit Storage</a></h1>
            <span class="tag">by Arman</span>
        </div>

        <nav id="nav" class="nav nav-pills">

            <ul>
                <li><a class="nav-link {{(Request::path() === '/') ? 'active bg-dark font-weight-bold' : ''}}" href="/">Подача заявки</a></li>
                @auth

                <li><a class="nav-link {{(Request::path() === 'boxes') ? 'active bg-dark font-weight-bold' : ''}}" href="{{route('boxes.index')}}">Ящики</a></li>
                <li ><a class="nav-link {{(Request::path() === 'fruits') ? 'active bg-dark font-weight-bold' : ''}}" href="{{route('fruits.index')}}">Фрукты</a></li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a style="{{(Request::path() === "") ? 'font-weight: bold' : ''}}" class="nav-link {{(Request::path() === 'login') ? 'active bg-dark font-weight-bold' : ''}}" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link {{(Request::path() === 'register') ? 'active bg-dark font-weight-bold' : ''}}"" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>

    </div>
    <!-- Header -->

    <!-- Page -->
    <div id="page" class="container">

        <section>
            @yield('Content')
        </section>

    </div>
    <!-- /Page -->

    <!-- Main -->
{{--    <div id="main">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <!-- Content -->--}}
{{--                <div class="6u">--}}
{{--                    <section>--}}
{{--                        <ul class="style">--}}
{{--                            <li class="fa fa-wrench">--}}
{{--                                <h3>Integer ultrices</h3>--}}
{{--                                <span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>--}}
{{--                            <li class="fa fa-leaf">--}}
{{--                                <h3>Aliquam luctus</h3>--}}
{{--                                <span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>--}}
{{--                        </ul>--}}
{{--                    </section>--}}
{{--                </div>--}}
{{--                <div class="6u">--}}
{{--                    <section>--}}
{{--                        <ul class="style">--}}
{{--                            <li class="fa fa-cogs">--}}
{{--                                <h3>Integer ultrices</h3>--}}
{{--                                <span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>--}}
{{--                            <li class="fa fa-road">--}}
{{--                                <h3>Aliquam luctus</h3>--}}
{{--                                <span>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Maecenas condimentum enim tincidunt risus accumsan.</span> </li>--}}
{{--                        </ul>--}}
{{--                    </section>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- /Main -->

</div>

<!-- Footer -->
{{--<div id="footer" class="wrapper style2">--}}
{{--    <div class="container">--}}
{{--        <section>--}}
{{--            <header class="major">--}}
{{--                <h2>Mauris vulputate dolor</h2>--}}
{{--                <span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>--}}
{{--            </header>--}}
{{--            <form method="post" action="#">--}}
{{--                <div class="row half">--}}
{{--                    <div class="12u">--}}
{{--                        <input class="text" type="text" name="name" id="name" placeholder="Name" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row half">--}}
{{--                    <div class="12u">--}}
{{--                        <input class="text" type="text" name="email" id="email" placeholder="Email" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row half">--}}
{{--                    <div class="12u">--}}
{{--                        <textarea name="message" id="message" placeholder="Message"></textarea>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row half">--}}
{{--                    <div class="12u">--}}
{{--                        <ul class="actions">--}}
{{--                            <li>--}}
{{--                                <input type="submit" value="Send Message" class="button alt" />--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </section>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- /Footer -->

<!-- Copyright -->
<div id="copyright">
    <div class="container"> <span class="copyright">Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)</span>
        <ul class="icons">
            <li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
            <li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
            <li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
        </ul>
    </div>
</div>

</body>
</html>
