@extends('layouts.admin')

@section('title','Kullanıcı Düzenle')

@section('icerik')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12 "> 
			<h1 class="page-header ">
				Users <small>Kullanıcı Düzenle</small>
			</h1>
		</div>
	</div>
	@include('includes.form_error')
	
	<div class="col-md-3">
		<img class="img-responsive img-rounded" alt="" src="{{ $user->photo ? $user->photo->file : 'https://placehold.it/400x400' }}" >
	</div>
	
	<div class="col-md-9">

		{!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

		<div class="form-group">
			{!! Form::label('photo_id','Photo:', []) !!}
			{!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('name','Ad Soyad:', []) !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email','Email:', []) !!}
			{!! Form::email('email',null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password','Password:', []) !!}
			{!! Form::password('password',['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('role_id','Role:', []) !!}
			{!! Form::select('role_id',$roles , null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('is_active','Status:', []) !!}
			{!! Form::select('is_active', array(1=>'Active' , 0 => 'Not Active'),null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Update User', ['class'=>'btn btn-primary col-md-6']) !!}
		</div>
		{!! Form::close() !!}

		{!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}
		<div class="form-group">
			{!! Form::submit('Delete User', ['class'=>'btn btn-danger col-md-6']) !!}
		</div>
		{!! Form::close() !!}

	</div>



	@endsection