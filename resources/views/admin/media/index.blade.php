@extends('layouts.admin')

@section('title','Fotograf Listele')

@section('head')
<link rel="stylesheet" href="{{ URL::asset('/css/db.css') }}">
@endsection

@section('icerik')

<div class="container-fluid">
	@if(Session::has('deleted_post'))
	<div class="alert alert-success">{{session('deleted_post')}}</div>
	@endif
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12 "> 
			<h1 class="page-header ">
				Medias <small>Fotoğraf Listele</small>
			</h1>
		</div>
	</div>

	<!-- /.row -->
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>File</th>
				<th>File Name</th>
				<th>Created At</th>

				
			</tr>
		</thead>
		<tbody>
			@if($photos)
			@foreach($photos as $photo)
			<tr>
				<td>{{$photo->id}}</td>
				<td><img src="{{$photo->file}}" height="100"></td>
				<td>{{$photo->file}}</td>
				<td>{{$photo->created_at->diffforhumans()}}</td>
				<td>
					{!! Form::open(['method'=>'DELETE','action'=>['AdminMediaController@destroy',$photo->id]]) !!}
					{!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				
				</td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
@endsection