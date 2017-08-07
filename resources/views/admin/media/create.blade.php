@extends('layouts.admin')

@section('title','Fotograf Ekle')
@section('head')
<link rel="stylesheet" href="{{ URL::asset('/css/dropzone.min.css') }}">
@endsection
@section('icerik')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12 "> 
			<h1 class="page-header ">
				Medias <small>Fotoğraf Ekle</small>
			</h1>
		</div>
	</div>
	@include('includes.form_error')
	
	{!! Form::open(['method'=>'Post','action'=>'AdminMediaController@store','class'=>'dropzone']) !!}
	{!! Form::close() !!}
	

	<script src="{{asset('js/dropzone.js')}}"></script>

</div>
@endsection