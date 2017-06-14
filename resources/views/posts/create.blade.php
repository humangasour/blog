@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
  {{-- {!! Html::style('css/parsley.css') !!} --}}
  <link href="{!! asset('css/parsley.css') !!}" media="all" rel="stylesheet" type="text/css" />
@endsection

@section('content')
  
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Create New Post</h1>
      <hr>
      {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
      
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
      
        {{ Form::label('body', "Post Body:", array('class' => 'form-spacing-top ')) }}
        {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
      
        {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
      
      {!! Form::close() !!}
      

<!-- Alternate Method Without Helper      -->
<!-- 
          <form method="POST" action="{{ route('posts.store') }}">
            <div class="form-group">
              <label name="title">Title:</label>
              <input id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
              <label name="body">Post Body:</label>
              <textarea id="body" name="body" rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
            <input type="hidden" name="_token" value="{{ Session::token() }}">// Hidden token for csrf protection
          </form>
              
-->
      
    </div>
  </div>
  
@endsection

@section('scripts')
  {{-- {!! Html:script('js/parsley.min.js') !!} --}}
  <script type="text/javascript" src="{!! asset('js/parsley.min.js') !!}"></script>
@endsection
