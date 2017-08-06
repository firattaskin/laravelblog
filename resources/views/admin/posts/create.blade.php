@extends('layouts.admin')

@section('title','Post Oluştur')

@section('icerik')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12 "> 
			<h1 class="page-header ">
				Posts <small>Post Ekle</small>
			</h1>
		</div>
	</div>
	@include('includes.form_error')

	{!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}
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
		{!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}



</div>
@endsection