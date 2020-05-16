  @extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col col-lg-9 col-md-9">
            <div class="card bg-light
">
                @if(count($posts)>0)

             <div class="card-body">
                  @foreach($posts as $post)

                         <div class="media">

                             <img class="mr-3" src="{{$post->photo ? $post->photo->file :null}}" alt="Generic Photo" width="100px">
                             <div class="media-body text-muted">
                                 <a href="{{route('posts.index',$post->slug)}}"><h3 class="mt-0 text-dark">{{$post->title}}</h3></a>
                                 {{$post->description}}
                                 <div class="flex d-flex flex-row justify-content-start my-2">

                                     @if($post->user->isAdmin())
                                     <span class="badge badge-dark">
                                         <i class="fa fa-user"></i>
                                        Admin
                                     </span>
                                     @else
                                         <span class="badge badge-light">
                                         <i class="fa fa-user"></i>
                                         {{$post->user->name}}
                                     </span>
                                      @endif

                                     <span class="badge badge-light">
                                         <i class="fa fa-clock-o"></i>
                                         {{$post->created_at->diffForHumans()}}
                                     </span>
                                     <span class="badge badge-success">
                                         <i class="fa fa-folder"></i>
                                         {{$post->category->name}}
                                     </span>
                                 </div>

                                 <hr>
                             </div><!--end of media-body-->


                         </div><!--end of media-->



                  @endforeach

              </div><!--end of card-body-->
         </div><!--end of card-->
            @endif
        </div><!--end of col col-lg-9-->



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
                        <h5 class="text-white">Categories</h5>
                    </div>
                    <div class="card-body">

                        @if(count($categories)>0)
                        <ul class="list-group text-dark">
                            @foreach($categories as $category)
                            <li class="list-group-item text-dark">

                                <a class="text-uppercase text-dark link-categories" href="#" style="font-family: Acme, sans-serif;">
                                    <span>
                                        <i class="fa fa-folder" style="padding: 0px 8px;"></i>
                                    </span>
                                     {{$category->name}}
                                </a>
                            </li>
                            @endforeach

                        </ul>
                        @endif
                    </div>
                   </div><!--end CATEGORIES CARD-->

                    @if(count($posts)>0)
                  <div class="card" style="margin-bottom: 32px;">
                    <div class="card-header text-white bg-dark border-dark" style="padding: 5px;">
                        <h5 class="text-white">Recent Posts</h5>
                    </div>
                    <div class="card-body">

                        <ul class="list-group text-dark">
                            @foreach($recent_posts as $post)

                            <li class="list-group-item d-flex flex-column">
                                <a href="{{route('posts.index',$post->id)}}">
                                    <h6 class="text-dark" style="font-family: Almendra, serif;">
                                        {{$post->title}}
                                    </h6>
                                </a>
                                <div class="flex d-flex flex-row justify-content-start my-2">
                                    @if($post->user->isAdmin())
                                        <span class="badge badge-dark">
                                              <i class="fa fa-user"></i>
                                              Admin
                                          </span>
                                        <span class="badge badge-success">
                                             <i class="fa fa-folder"></i>
                                            {{$post->category->name}}
                                        </span>
                                    @endif
                                </div>

                            </li>
                                @endforeach
                        </ul>
                    </div>
                  </div>
                        @endif

                </div>
    </div>
</div>

   <div class="bg-light testimonials-clean">
       <div class="container">
           <div class="intro my-0 mx-auto">
             <h2 class="text-center">
                 Testimonials
             </h2>
               <p class="text-center">
                   Our customers love us! Read what they have to say below. Aliquam sed justo ligula.
                   Vestibulum nibh erat, pellentesque ut laoreet vitae.
               </p>
           </div>
           <div class="row people">
               <div class="col col-lg-4 col-md-6 item">
                   <div class="box">
                       <p class="description">
                           Praesent aliquam in tellus eu gravida.
                           Aliquam varius finibus est, et interdum justo suscipit id.
                       </p>
                   </div>
                   <div class="author">
                       <img src="/images/tree.jpg"  alt="">
                       <h5 class="name">Leila Sinore</h5>
                   </div>
               </div>
               <div class="col col-lg-4 col-md-6 item">
                   <div class="box">
                       <p class="description">
                           Praesent aliquam in tellus eu gravida.
                           Aliquam varius finibus est, et interdum justo suscipit id.
                       </p>
                   </div>
                   <div class="author">
                       <img src="/images/tree.jpg"  alt="">
                       <h5 class="name">Alex Murithi</h5>
                   </div>
               </div>
               <div class="col col-lg-4 col-md-6 item">
                   <div class="box">
                       <p class="description">
                           Praesent aliquam in tellus eu gravida.
                           Aliquam varius finibus est, et interdum justo suscipit id.
                       </p>
                   </div>
                   <div class="author">
                       <img src="/images/tree.jpg"  alt="">
                       <h5 class="name">Rose Gatabi</h5>
                   </div>
               </div>
           </div>
       </div>
   </div>

    <div class="newsletter-subscribe">
      <div class="container">
          <div class="intro">
              <h2 class="text-center">Subscribe to our Newsletter!</h2>
              <p class="text-center">
                  Nunc luctus in metus eget fringilla. Aliquam sed justo ligula.
                  Vestibulum nibh erat, pellentesque ut laoreet vitae.
              </p>
          </div>

          <form action="" class="form-inline">
             <div class="form-group">
                 <input type="email" class="form-control">
             </div>
              <div class="form-group">
                  <button class="btn btn-success">Subscribe</button>
              </div>
          </form>
      </div>
    </div>



@endsection

  @section('footer')
      <div class="my-footer py-5">
          <div class="container">
              <div class="social-media-icon d-flex flex-row justify-content-center">
                  <a href="">
                      <i class="fa fa-twitter fa-2x mx-2 text-white"></i>
                  </a><a href="">
                      <i class="fa fa-facebook fa-2x mx-2 text-white"></i>
                  </a><a href="">
                      <i class="fa fa-google fa-2x mx-2 text-white"></i>
                  </a><a href="">
                      <i class="fa fa-instagram fa-2x mx-2 text-white"></i>
                  </a>

              </div>

              <div class="bottom-nav">
                  <ul class="nav navbar-nav d-flex flex-row justify-content-center">
                      <li class="nav-link" >
                          <a href="" class="text-white px-4">Home</a>
                      </li>
                      <li class="nav-link">
                          <a href="" class="text-white px-4">Celebrity</a>
                      </li>
                      <li class="nav-link">
                          <a href="" class="text-white px-4">About Us</a>
                      </li>
                      <li class="nav-link">
                          <a href="" class="text-white px-4">Contact Us</a>
                      </li>
                  </ul>
              </div>
              <div class="company-name d-flex flex-row justify-content-center mt-2 flex-xs-column">
                  <h2 class="text-white mx-2"> {{ config('app.name') }}</h2>
                  <span class="mx-2 mt-2">© {{now()->year}}</span>
              </div>
          </div>
      </div>
      @endsection

