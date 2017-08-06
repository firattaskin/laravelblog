@extends('layouts.admin')

@section('title','Kullanıcı Listele')

@section('icerik')
<div class="container-fluid">
	@if(Session::has('deleted_user'))
	<p>{{session('deleted_user')}}</p>
	@endif
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12 "> 
			<h1 class="page-header ">
				Users <small>Kullanıcı Listele</small>
			</h1>
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-user"></i>
				</li>
			</ol>
		</div>
	</div>

	<!-- /.row -->
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Kayıt Tarihi</th>
				<th>Fotoğraf</th>
			</tr>
		</thead>
		<tbody>
			@if($users)
			@foreach($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td><a href="{{ route('users.edit', $user->id ) }}">{{$user->name}}</a></td>
				<td>{{$user->email}}</td>
				<td>{{$user->created_at->diffforhumans()}}</td>
				<td><img src="{{ $user->photo ? $user->photo->file : 'no photo' }}"  height="100"></td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
@endsection