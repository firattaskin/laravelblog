@extends('layouts.admin')

@section('title','Kategori Listele')

@section('icerik')

<div class="container-fluid">
	@if(Session::has('deleted_category'))
	<div class="alert alert-success">{{session('deleted_category')}}</div>
	@endif
	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12 "> 
			<h1 class="page-header ">
				Category <small>Kategori Listele</small>
			</h1>
		</div>
	</div>

	<!-- /.row -->
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			@if($categories)
			@foreach($categories as $category)
			<tr>
				<td>{{$category->id}} </td>
				<td><a href="{{ route('categories.edit',$category->id) }}"> {{$category->name}}
				</a></td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
@endsection