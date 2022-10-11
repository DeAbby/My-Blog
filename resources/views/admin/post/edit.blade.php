@extends('Layout.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
<div class="card-header">
Edit Post
</div>
<div class="card-body">
@if($errors->any())
<ul class="alert alert-danger list-unstyled">
@foreach($errors->all() as $error)
<li>- {{ $error }}</li>
@endforeach
</ul>
@endif
<form method="POST" action="{{ route('admin.post.update', ['id'=> $viewData['posts']->getId()]) }}"
enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
<div class="col">
<div class="mb-3 row">
<label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Title:</label>
<div class="col-lg-10 col-md-6 col-sm-12">
<input name="title" value="{{ $viewData['posts']->getTitle() }}" type="text" class="form-control">
</div>
</div>
</div>
<div class="col">
<div class="mb-3 row">
<label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Date:</label>
<div class="col-lg-10 col-md-6 col-sm-12">
<input name="date" value="{{ $viewData['posts']->getDate() }}" type="string" class="form-control">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col">
<div class="mb-3 row">
<label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
<div class="col-lg-10 col-md-6 col-sm-12">
<input class="form-control" type="file" name="image">
</div>
</div>
</div>
<div class="col">
&nbsp;
</div>
</div>
<div class="mb-3">
<label class="form-label">Description</label>
<textarea class="form-control" name="description"
rows="3">{{ $viewData['posts']->getDescription() }}</textarea>
</div>
<button type="submit" class="btn btn-primary">Edit</button>
</form>
</div>
</div>
@endsection