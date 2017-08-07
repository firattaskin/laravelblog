@extends('layouts.admin')

@section('title','Kategori Oluştur')

@section('icerik')
<div class="row">
	<div class="col-lg-12 "> 
		<h1 class="page-header ">
			Category <small>Kategori Oluştur</small>
		</h1>
	</div>
</div>

<div class="container-fluid col-md-6">

	{!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store']) !!}
	<div class="form-group">
		{!! Form::label('name','Name:', []) !!}
		{!! Form::text('name', null , ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Create Post', ['class'=>'btn btn-primary ']) !!}
	</div>
	{!! Form::close() !!}



</div>
@endsection