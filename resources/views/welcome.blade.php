  @extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col col-lg-9 col-md-9">
            <div class="card">
                @if(count($posts)>0)

             <div class="card-body">
                  @foreach($posts as $post)
                 <div class="media">
                     <img class="mr-3" src="{{$post->photo ? $post->photo->file :null}}" alt="Generic Photo" width="100px">
                      <div class="media-body">
                      <h5 class="mt-0">{{$post->title}}</h5>
                      {!!$post->body!!}
                      </div>
                  </div>
                  @endforeach

              </div>
         </div>
            @endif
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

