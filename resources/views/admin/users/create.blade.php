@extends('../admin/dashboardmaster')

@section('title','Kullanıcı Ekle')

@section('icerik')
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12 "> 
			<h1 class="page-header ">
				Users <small>Kullanıcı Ekle</small>
			</h1>
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-user"></i>
				</li>
			</ol>
		</div>
	</div>
	
	{!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
	
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
		{!! Form::select('is_active', array(1=>'Active' , 0 => 'Not Active'),0, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::submit('Oluştur', ['class'=>'btn btn-primary']) !!}
	</div>
	
	{!! Form::close() !!}

	@if(count($errors))
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif

@endsection