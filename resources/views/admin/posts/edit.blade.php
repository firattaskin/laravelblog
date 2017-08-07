@extends('layouts.admin')

@section('title','Post Düzenle')

@section('icerik')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12 "> 
			<h1 class="page-header ">
				Posts <small>Post Düzenle</small>
			</h1>
		</div>
	</div>
	@include('includes.form_error')

	{!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}
	<div class="form-group">
		{!! Form::label('title','Title:', []) !!}
		{!! Form::text('title',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('category_id','Category:', []) !!}
		{!! Form::select('category_id',[''=>'Choose Category']+ $categories,null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('photo_id', 'Photo:', []) !!}
		{!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('body','Description:', []) !!}
		{!! Form::textarea('body',null, ['class'=>'form-control','rows'=>'3']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Update Post', ['class'=>'btn btn-primary col-md-6']) !!}
	</div>
	{!! Form::close() !!}

	{!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}
	<div class="form-group">
		{!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-md-6']) !!}
	</div>
	{!! Form::close() !!}

</div>
@endsection