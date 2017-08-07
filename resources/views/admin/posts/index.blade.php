@extends('layouts.admin')

@section('title','Post Listele')

@section('icerik')

<div class="container-fluid">
	@if(Session::has('deleted_post'))
	<div class="alert alert-success">{{session('deleted_post')}}</div>
	@endif
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12 "> 
			<h1 class="page-header ">
				Posts <small>Post Listele</small>
			</h1>
		</div>
	</div>

	<!-- /.row -->
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Body</th>
				<th>User</th>
				<th>Category</th>
				<th>Photo</th>
				<th>Created At</th>

				
			</tr>
		</thead>
		<tbody>
			@if($posts)
			@foreach($posts as $post)
			<tr>
				<td>{{$post->id}}</td>
				<td><a href="{{ route('posts.edit',$post->id) }}">  {{$post->title}}</a> </td>
				<td>{{$post->body}}</td>
				<td>{{$post->user->name}}</td>
				<td>{{$post->category ? $post->category->name : 'Empty'}}</td>
				<td><img src="{{$post->photo ? $post->photo->file : 'https://placehold.it/400x400'}}" height="100px"></td>
				<td>{{$post->created_at->diffforhumans()}}</td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
@endsection