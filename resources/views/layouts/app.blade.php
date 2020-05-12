<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  shadow-sm" id="navBar">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <h3 style="font-family: 'Apple Color Emoji'">
                    {{ config('app.name') }}
                </h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto" id="navBar-ul">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Dashboard
                            </a>
                        </li>
                       <li class="nav-item">
                           <a href="#" class="nav-link">Blog</a>
                       </li>

                       <li class="nav-item">
                        <div class="dropdown show" id="dropdown-categories">
                            <a class="dropdown-toggle nav-link" href="#"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Categories
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" id="dropdown">
                                @foreach($categories as $category)
                            <a class="dropdown-item nav-link" href="{{route('posts.category.show',$category->name)}}" >{{$category->name}}</a>
                                @endforeach


                            </div>
                          </div>
                       </li>


                    <li class="nav-item">
                        <a href="#" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Conctat</a>
                    </li>



                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" id="navBar-right-ul">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>


                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{Auth::user()->photo->file}}" id="user-avatar" alt="">
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a href="#" class="dropdown-item">{{Auth::user()->name}}
                                        @if(Auth::user()->isAdmin())
                                        <span class="badge badge-dark">Admin</span>
                                            @endif
                                    </a>

                                    @if(Auth::user()->isAdmin())
                                    <a href="{{route('admin')}}" class="dropdown-item">Admin Panel</a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>


                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>


    <footer>
        @yield('footer')
    </footer>
</body>

</html>



