 {{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}

{{-- <html>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
<body style="padding-top:70px; background:ghostwhite;">
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark">
        <div class="container-fluid"><a class="navbar-brand" href="index.html">Brand</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-white"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.html">HOME</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="blog.html">BLOG</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-white" data-toggle="dropdown" aria-expanded="false" href="#">CATEGORIES</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-white" data-toggle="dropdown" aria-expanded="false" href="#">SERVICES</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">ABOUT US</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">CONTACT US</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto" id="right-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link border rounded-0 btn btn-primary" href="#" style="padding: 3px;"><span class="text-white"><i class="fas fa-sign-in-alt fa-2x"></i>&nbsp; Login</span>&nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white border rounded-0 btn btn-primary" href="#" style="padding: 3px;"><span><i class="fas fa-user-plus fa-2x"></i>&nbsp;SIGNUP</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="jumbotron text-dark border rounded-0" style="background-color: #ffffff;padding: 10px;">
                        <div class="media" id="blog-post">
                            <img class="img-fluid mr-3 d-flex align-self-center" id="post-img" src="images/tree.jpg" width="250px">
                            <div class="media-body blog-post-media">
                                <div id="div-post-body" class="d-flex flex-lg-column bd-highlight">
                                    <h4 class="text-success mb-0 mt-2" id="blog-post-category" style="font-family: Actor, sans-serif;"><span><i class="fas fa-clipboard-list" style="padding-right: 5px;"></i></span>Category</h4>
                                    <h5 id="blog-post-title" class="pb-0 mb-0 mt-0" style="font-family: Acme, sans-serif;"><br>Where does it come from?&nbsp;<br><br></h5>
                                    <p id="blog-post-para" class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                                    <div id="blog-post-author-date"
                                        class="d-flex justify-content-start mt-2"><span class="mb-2 span badge badge-dark mr-2">By Admin</span><span id="blog-post-date-posted" class="mb-2 badge badge-light" style="font-size: 15px;"><i class="far fa-clock" style="padding-right: 4px;"></i>4 hours ago</span></div>
                                </div>
                                <div class="d-flex justify-content-between mt-4"><a id="read-more-btn" class="btn btn-primary" href="#" type="button">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="jumbotron text-dark border rounded-0" style="background-color: #ffffff;padding: 10px;">
                        <div class="media" id="blog-post"><img class="img-fluid mr-3 d-flex align-self-center" id="post-img" src="assets/img/desk.jpg" width="250px">
                            <div class="media-body blog-post-media">
                                <div id="div-post-body" class="d-flex flex-lg-column bd-highlight">
                                    <h4 class="text-success mb-0 mt-2" id="blog-post-category" style="font-family: Actor, sans-serif;"><span><i class="fas fa-clipboard-list" style="padding-right: 5px;"></i></span>Category</h4>
                                    <h5 id="blog-post-title" class="pb-0 mb-0 mt-0" style="font-family: Acme, sans-serif;"><br>Where does it come from?&nbsp;<br><br></h5>
                                    <p id="blog-post-para" class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                                    <div id="blog-post-author-date"
                                        class="d-flex justify-content-start mt-2"><span class="mb-2 span badge badge-dark mr-2">By Admin</span><span id="blog-post-date-posted" class="mb-2 badge badge-light" style="font-size: 15px;"><i class="far fa-clock" style="padding-right: 4px;"></i>4 hours ago</span></div>
                                </div>
                                <div class="d-flex justify-content-between mt-4"><a id="read-more-btn" class="btn btn-primary" href="#" type="button">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="jumbotron text-dark border rounded-0" style="background-color: #ffffff;padding: 10px;">
                        <div class="media" id="blog-post"><img class="img-fluid mr-3 d-flex align-self-center" id="post-img" src="assets/img/desk.jpg" width="250px">
                            <div class="media-body blog-post-media">
                                <div id="div-post-body" class="d-flex flex-lg-column bd-highlight">
                                    <h4 class="text-success mb-0 mt-2" id="blog-post-category" style="font-family: Actor, sans-serif;"><span><i class="fas fa-clipboard-list" style="padding-right: 5px;"></i></span>Category</h4>
                                    <h5 id="blog-post-title" class="pb-0 mb-0 mt-0" style="font-family: Acme, sans-serif;"><br>Where does it come from?&nbsp;<br><br></h5>
                                    <p id="blog-post-para" class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                                    <div id="blog-post-author-date"
                                        class="d-flex justify-content-start mt-2"><span class="mb-2 span badge badge-dark mr-2">By Admin</span><span id="blog-post-date-posted" class="mb-2 badge badge-light" style="font-size: 15px;"><i class="far fa-clock" style="padding-right: 4px;"></i>4 hours ago</span></div>
                                </div>
                                <div class="d-flex justify-content-between mt-4"><a id="read-more-btn" class="btn btn-primary" href="#" type="button">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-3 col-sm-12 col-md-12 col-xs-12">
                    <div class="jumbotron bg-white border rounded-0" style="padding: 40px 30px;">
                        <h4 class="text-dark">Search Blog</h4>
                        <form class="form-inline">
                            <div class="input-group"><input class="form-control" type="text">
                                <div class="input-group-append"><span class="input-group-text"><i class="fas fa-search"></i></span></div>
                            </div>
                        </form>
                    </div>
                    <div class="card" style="margin-bottom: 32px;">
                        <div class="card-header text-white bg-dark border rounded-0 border-dark" style="padding: 5px;">
                            <h5>Categories</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group text-dark">
                                <li class="list-group-item text-dark"><a class="text-uppercase text-dark link-categories" href="#" style="font-family: Acme, sans-serif;"><span><i class="fas fa-folder" style="padding: 0px 8px;"></i></span>CELEBRITY</a></li>
                                <li class="list-group-item text-dark"><a class="text-uppercase text-dark link-categories" href="#" style="font-family: Acme, sans-serif;"><span><i class="fas fa-folder" style="padding: 0px 8px;"></i></span>Technology</a></li>
                                <li class="list-group-item text-dark"><a class="text-uppercase text-dark link-categories" href="#" style="font-family: Acme, sans-serif;"><span><i class="fas fa-folder" style="padding: 0px 8px;"></i></span>Business</a></li>
                                <li class="list-group-item text-dark"><a class="text-uppercase text-dark link-categories" href="#" style="font-family: Acme, sans-serif;"><span><i class="fas fa-folder" style="padding: 0px 8px;"></i></span>politics</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card" style="margin-bottom: 32px;">
                        <div class="card-header text-white bg-dark border rounded-0 border-dark" style="padding: 5px;">
                            <h5>Recent Posts</h5>
                        </div>
                        <div class="card-body" style="padding: 0px;">
                            <ul class="list-group text-dark">
                                <li class="list-group-item d-flex flex-column">
                                    <a href="#">
                                        <h6 class="text-muted mb-0" style="font-family: Almendra, serif;">How Hackers access your online accounts?</h6><span class="text-primary mt-0" style="font-size: 13px;font-family: Andika, sans-serif;">By Clara Marina</span></a>
                                </li>
                                <li class="list-group-item d-flex flex-column">
                                    <a href="#">
                                        <h6 class="text-muted mb-0" style="font-family: Almendra, serif;">How Hackers access your online accounts?</h6><span class="text-primary mt-0" style="font-size: 13px;font-family: Andika, sans-serif;">By Clara Marina</span></a>
                                </li>
                                <li class="list-group-item d-flex flex-column">
                                    <a href="#">
                                        <h6 class="text-muted mb-0" style="font-family: Almendra, serif;">How Hackers access your online accounts?</h6><span class="text-primary mt-0" style="font-size: 13px;font-family: Andika, sans-serif;">By Clara Marina</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card" style="margin-bottom: 32px;">
                        <div class="card-header text-white bg-dark border rounded-0 border-dark" style="padding: 5px;">
                            <h5>Recent Posts</h5>
                        </div>
                        <div class="card-body" style="padding: 0px;">
                            <ul class="list-group text-dark">
                                <li class="list-group-item"><span>List Group Item 1</span></li>
                                <li class="list-group-item"><span>List Group Item 2</span></li>
                                <li class="list-group-item"><span>List Group Item 3</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Testimonials </h2>
                <p class="text-center">Our customers love us! Read what they have to say below. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/1.jpg">
                        <h5 class="name">Ben Johnson</h5>
                        <p class="title">CEO of Company Inc.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/3.jpg">
                        <h5 class="name">Carl Kent</h5>
                        <p class="title">Founder of Style Co.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/2.jpg">
                        <h5 class="name">Emily Clark</h5>
                        <p class="title">Owner of Creative Ltd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-clean">
        <form method="post">
            <h2 class="text-center">Leave a Testimonial Here!</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
            <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>
    <div class="newsletter-subscribe">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Subscribe for our Newsletter</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <form class="form-inline" method="post">
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Your Email"></div>
                <div class="form-group"><button class="btn btn-primary" type="submit">Subscribe </button></div>
            </form>
        </div>
    </div>
    <div class="bg-dark footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html> --}}

 @extends('layouts.app')

@section('content')
       <div class="container-fluid">
           <div class="row">
               <div class="col col-lg-9 col-md-9 col-sm-12 col-xs-12">
                 <div class="card">

                     <div class="card-body">
                        <h4 class="text-uppercase card-title" style="font-family: Acme, sans-serif;">The title of the post goes here</h4>

                        <div class="d-flex flex-row justify-content-start my-2">
                            <span class="badge badge-dark mr-5">
                                <i class="fa fa-user px-1"></i>Admin
                            </span>
                            <span class="badge badge-light mr-5">
                                <i class="fa fa-clock-o px-1"></i>2 days ago
                            </span>
                            <span class="badge badge-info mr-5">
                                <i class="fa fa-folder px-1"></i>Business
                            </span>
                        </div>

                        <div><img class="img-fluid" src="images/tree.jpg"></div>

                        <p class="text-muted card-text py-2" style="font-family: Amaranth, sans-serif;">
                            Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.
                        </p>

                     </div>  <!--end card-body-->

                     <div class="card" style="padding: 10px;margin-bottom: 10px;">
                        <div class="card-body" style="padding: 10px;">
                            <h4 class="card-title">Leave a Comment here..</h4>
                            <textarea class="form-control my-2" rows="5"></textarea>
                            <button class="btn btn-primary" type="button">Submit</button>
                        </div>
                     </div><!--end nested-comment-card-->

                     <div class="media px-2">
                        <img class="img-fluid rounded-circle user-round-img mr-3" src="images/tree.jpg" width="60px">
                        <div class="media-body">
                            <h5>Media Headingf</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>
                          <div class="d-flex flex-row justify-content-start my-3">
                              <span class="mx-5 badge   badge-info">
                                  <i class="fa fa-heart mx-1">
                                      </i>like
                                    </span>

                              <span class="badge badge-info" data-toggle="modal" data-target="#reply-modal" style="cursor:pointer;">
                                <i class="fa fa-reply mx-1">
                                    </i>&nbsp;reply
                            </span>
                          </div>
                        <div class="media"><img class="rounded-circle user-round-img img-fluid mr-3" src="images/tree.jpg" width="60px">
                                <div class="media-body">
                                    <h5>Media Heading</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>

                                    <div class="d-flex flex-row justify-content-start mb-2">
                                        <span class="mx-5 badge badge-info">
                                            <i class="fa fa-heart mx-1">
                                            </i>like
                                        </span>
                                        <span class="badge badge-info" style="cursor:pointer;" data-toggle="modal" data-target="#reply-modal">
                                            <i class="fa fa-reply mx-1">
                                                </i>&nbsp;reply
                                            </span>
                                        </div>
                                </div>
                        </div>
                        <div class="media">
                            <img class=" rounded-circle user-round-img img-fluid mr-3" src="images/tree.jpg" width="60px">
                            <div class="media-body">

                                <h5>Media Heading</h5>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus nisl ac diam feugiat, non vestibulum libero posuere. Vivamus pharetra leo non nulla egestas, nec malesuada orci finibus. </p>

                                <div class="d-flex flex-row justify-content-start mb-2">
                                    <span class="mx-5 badge badge-info">
                                        <i class="fa fa-heart mx-1">
                                            </i>like
                                    </span>
                                        <span class="badge badge-info" style="cursor:pointer;" data-toggle="modal" data-target="#reply-modal">
                                            <i class="fa fa-reply mx-1">
                                                </i>&nbsp;reply
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>

                     </div>


                 </div>    <!--end card-->



               </div>

                <div class="col col-lg-3 col-md-3 col-sm-12 col-xs-12">

                 <div class="card">
                     <div class="card-body">
                         <h3>Search Blog</h3>
                        <form class="form-inline">
                            <div class="input-group"><input class="form-control" type="text">
                                <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                                </div>
                            </div>
                        </form>
                     </div>
                 </div>

                 <div class="card" style="margin-bottom: 32px;">
                    <div class="card-header text-white bg-dark border rounded-0 border-dark" style="padding: 5px;">
                        <h5>Categories</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group text-dark">
                            <li class="list-group-item text-dark">
                                <a class="text-uppercase text-dark link-categories" href="#" style="font-family: Acme, sans-serif;">
                                    <span>
                                        <i class="fa fa-folder" style="padding: 0px 8px;"></i>
                                    </span>
                                    CELEBRITY
                                </a>
                            </li>
                            <li class="list-group-item text-dark">
                                <a class="text-uppercase text-dark link-categories" href="#" style="font-family: Acme, sans-serif;">
                                    <span>
                                        <i class="fa fa-folder" style="padding: 0px 8px;"></i>
                                    </span>Technology
                                </a>
                            </li>
                            <li class="list-group-item text-dark">
                                <a class="text-uppercase text-dark link-categories" href="#" style="font-family: Acme, sans-serif;">
                                    <span>
                                        <i class="fa fa-folder" style="padding: 0px 8px;"></i>
                                    </span>Business
                                </a>
                            </li>
                            <li class="list-group-item text-dark">
                                <a class="text-uppercase text-dark link-categories" href="#" style="font-family: Acme, sans-serif;">
                                    <span>
                                        <i class="fa fa-folder" style="padding: 0px 8px;"> </i>
                                </span>politics
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!--end CATEGORIES CARD-->

                <div class="card" style="margin-bottom: 32px;">
                    <div class="card-header text-white bg-dark border-dark" style="padding: 5px;">
                        <h5>Recent Posts</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group text-dark">
                            <li class="list-group-item d-flex flex-column">
                                <a href="#">
                                    <h6 class="text-muted mb-0" style="font-family: Almendra, serif;">
                                        How Hackers access your online accounts?
                                    </h6>
                                    <span class="text-primary mt-0" style="font-size: 13px;font-family: Andika, sans-serif;">
                                        By Clara Marina
                                    </span>
                                </a>
                            </li>
                            <li class="list-group-item d-flex flex-column">
                                <a href="#">
                                    <h6 class="text-muted mb-0" style="font-family: Almendra, serif;">
                                        How Hackers access your online accounts?
                                    </h6>
                                    <span class="text-primary mt-0" style="font-size: 13px;font-family: Andika, sans-serif;">
                                        By Clara Marina
                                    </span>
                                </a>
                            </li>
                            <li class="list-group-item d-flex flex-column">
                                <a href="#">
                                    <h6 class="text-muted mb-0" style="font-family: Almendra, serif;">
                                        How Hackers access your online accounts?
                                    </h6>
                                    <span class="text-primary mt-0" style="font-size: 13px;font-family: Andika, sans-serif;">
                                        By Clara Marina
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                </div>
           </div>

       </div>



@endsection

