@extends('Layout.app1')


@section('title', $viewData["title"])
@section('content')
<main class="container">
  <div class="p-6 p-md-6 mb-6">
<div class="card mb-3">
<div class="row g-0">
<div class="col-md-4">
<img src="{{ $viewData["post"]->getImageUrl() }}" class="img-fluid rounded-start">
</div>
<div class="col-md-8">
<div class="card-body">
<h3 class="card-title">
{{ $viewData["post"]->getTitle() }} 
</h3>
<h6>{{ $viewData["post"]->getDate() }}</h6>
<p class="card-text">{{ $viewData["post"]->getDescription()}}</p>
</div>
</div>
</div>
</div>
@endsection