@extends('layouts.admin')

@section('title','Comment Listele')

@section('icerik')

<div class="container-fluid">
	@if(Session::has('deleted_post'))
	<div class="alert alert-success">{{session('deleted_post')}}</div>
	@endif
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12 "> 
			<h1 class="page-header ">
				Comments <small>Comment Listele</small>
			</h1>
		</div>
	</div>

	<!-- /.row -->
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Body</th>
			
				
			</tr>
		</thead>
		<tbody>
			@if($comments)
			@foreach($comments as $comment)
			<tr>
				<td>{{$comment->id}}</td>
				<td>{{$comment->body}}</td>
				
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
@endsection