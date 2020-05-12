@extends('layouts.app')

@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col col-lg-9 col-md-9">
              <div class="card">
                  <div class="card-header">
                      <div class="card-title">
                          <h3>{{$post->title}}</h3>
                          <div class="flex d-flex flex-row justify-content-start py-2">

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
                      </div>
                  </div>
                  <div class="card-body">
                     {!! $post->body !!}


                  <div class="card-footer">
                      <div id="disqus_thread"></div>
                      <script>

                          /**
                           *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                           *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                          /*
                          var disqus_config = function () {
                          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                          };
                          */
                          (function() { // DON'T EDIT BELOW THIS LINE
                              var d = document, s = d.createElement('script');
                              s.src = 'https://tabtips.disqus.com/embed.js';
                              s.setAttribute('data-timestamp', +new Date());
                              (d.head || d.body).appendChild(s);
                          })();
                      </script>
                      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                      <script id="dsq-count-scr" src="//tabtips.disqus.com/count.js" async></script>
                  </div>
              </div>
          </div>

      </div>

          <div class="col col-lg-3 col-md-3">
              <div class="card p-3">
                  <div class="card-body">
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Search.." aria-label="Recipient's username" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
                          </div>
                      </div>
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
                              @foreach($posts as $post)

                                  <li class="list-group-item d-flex flex-column">
                                          <a href="{{route('posts.index',$post->slug)}}">
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
                                              @endif
                                      </div>

                                  </li>
                              @endforeach
                          </ul>
                      </div>
                  </div>
              @endif

          </div>
  </div><!--end row-->
  </div>

@stop
