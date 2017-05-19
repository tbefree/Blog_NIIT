@extends('main')

@section('title','|Create New Post')

@section('stylesheets')

      {!! Html::style('css/parsley.css') !!}

@endsection

@section('content')
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>

            {!! Form::open(array('route' => 'posts.store' )) !!}
                {{ Form::label('title','Title:') }}
                {{ Form::text('title', null,array('class' => 'form-control','required' => '','maxlength' => '255')) }}

                {{ Form::label('slug','Slug:') }}
                {{ Form::text('slug', null,array('class' => 'form-control','required' => '','minlength' => '5','maxlength' =>'255' )) }}

                {{ Form::label('body',"Post Body:") }}
                {{ Form::textarea('body',null,array('class' => 'form-control', 'required' => ''))}}

                {{ Form::submit('Create post',array('class' => 'btn btn-success btn-lg btn-block','style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}
          </div>

        </div>

@endsection

@section('scripts')

      {!! Html::script('js/parsley.min.js') !!}

@endsection

@section('zs')
{{-- 总结:通过@section/@endsection 中利用Html调用style的CSS样式，可以很快构建;调用Html中的script可以很快的获取一些validation等js的功能，此处采用了parsley的js，根据文档可以很便捷地实现一些功能（网址就已收藏）*/
# /*今天学习的就是借助客户端的验证来减轻服务器端验证的负担，注意不是取代，虽然js有很多好处，但是客户端验证的不安全性是最大的缺点，所以景观服务器端验证有些杂乱，不如js，但也是不可取代的。 --}}
@endsection
