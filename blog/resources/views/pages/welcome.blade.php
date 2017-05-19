@extends('main')

@section('title','| Homepage')


@section('content')
       <div class='row'>
         <div class='col-md-12'>
           <div class="jumbotron">
              <h1>Welcome to My Blog!</h1>
              <p class='lead'>Thank you so much for visiting.This is my test website with Laravel.Please read my latest post!</p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            </div>
         </div>
       </div><!--end of header .row-->


          <div class="row">
            <div class="col-md-8">

                @foreach($posts as $post)
                      <div class="post">
                          <h3>{{ $post->title }}</h3>
                          <p>{{ substr($post->body,0,280) }}{{ strlen($post->body) > 280 ? "..." : "" }} </p>
                                {{--这里换成290/300/320似乎就没有用 --}}
                          <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary" >Read More</a>
                      </div>

                      <hr>
                @endforeach

            </div>

            <div class="col-md-3 col-md-offset-1">
                  <h2>SideBar</h2>
            </div>
          </div>
  @endsection
