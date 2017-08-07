@extends('layouts.admin')

@section('title','Kategori Düzenle')

@section('icerik')
<div class="row">
	<div class="col-lg-12 "> 
		<h1 class="page-header ">
			Category <small>Kategori Düzenle</small>
		</h1>
	</div>
</div>

<div class="container-fluid col-md-6">

	{!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id]]) !!}
	<div class="form-group">
		{!! Form::label('name','Name:', []) !!}
		{!! Form::text('name', null , ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Update', ['class'=>'btn btn-primary col-md-6']) !!}
	</div>
	{!! Form::close() !!}
	
	{!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
	{!! Form::submit('Delete', ['class'=>'btn btn-danger col-md-6']) !!}
	{!! Form::close() !!}

</div>
@endsection