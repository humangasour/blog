@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

	 <div class="row">
    <form action="{{ route('posts.update', $post->id) }}" method="post"> 
      <div class="col-md-8">
        <label for="title">Title:</label>

        <textarea type="text" class="form-control input-md" id="title" 
        name="title" rows="1" style="resize:none;">{{ $post->title 
        }}</textarea>

        <label class="form-spacing-top" for="body">Body:</label>

        <textarea type="text" class="form-control input-md" id="body" 
        name="body" rows="10">{{ $post->body }}</textarea>
      </div> 
      <div class="col-md-4"> 
        <div class="well"> 
          <dl class="dl-horizontal"> 
            <dt>Created at:</dt>
            <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd> 
          </dl>
          <dl class="dl-horizontal"> 
            <dt>Last Updated:</dt> 
            <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd> 
          </dl>
          <hr>
          <div class="row">
            <div class="col-sm-6">
             <a href="{{ route('posts.show', $post->id) }}" class="btn btn-danger btn-block">Cancel</a> 
            </div>
            <div class="col-sm-6">
             <button type="submit" class="btn btn-success btn-block">Save Changes</button>
            </div>
          </div>
        </div>
      </div>
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
 </div>


@stop

<!--
<form method="POST" action="{{ route('posts.update', $post->id) }}">
      <div class="form-group">
        <label for="title">Title:</label>
        <textarea type="text" class="form-control input-lg" id="title" name="title" rows="1" style="resize:none;">{{ $post->title }}</textarea>
      </div>
      <div class="form-group">
        <label for="body">Body:</label>
        <textarea type="text" class="form-control input-lg" id="body" name="body" rows="10">{{ $post->body }}</textarea>
      </div>
    </div>
    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Created at:</dt>
          <dd>{{ date('M j, Y h:i:sa', strtotime($post->created_at)) }}</dd>
        </dl>

        <dl class="dl-horizontal">
          <dt>Last updated:</dt>
          <dd>{{ date('M j, Y h:i:sa', strtotime($post->updated_at)) }}</dd>
        </dl>
        <hr>
        <div class="row">
          <div class="col-sm-6">
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-danger btn-block">Back</a>
          </div>
          <div class="col-sm-6">
              <button type="submit" class="btn btn-success btn-block">Save</button>
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              {{ method_field('PUT') }}
            </form>﻿
-->

<!--
{!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
		<div class="col-md-8">
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
			
			{{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
					  {{ Form::submit('Save Changes', ['class', 'btn btn-success btn-block']) }}
					</div>
				</div>

			</div>
		</div>
		{!! Form::close() !!}
-->


