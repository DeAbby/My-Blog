@extends('Layout.app1')
@section('title', $viewData["title"])
@section('content')
<main class="container">
  <div class="p-4 p-md-5 mb-4">
<div class="row mb-2">
  <link href="{{ asset('/css/blog.css') }}" rel="stylesheet" />
 @foreach ($viewData["posts"] as $posts)
 <div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">{{ $posts->getTitle() }}</h3>
          <div class="mb-1 text-muted">{{$posts->getDate() }}</div>
          <p class="card-texts mb-auto">
            {{ substr($posts->getDescription(), 0, 100) }}
            </p>
          <a href="{{ route('posts.info', ['id'=> $posts->getId()]) }}" class="stretched-link">Continue reading</a>
          </div>
        <div class="col-auto d-none d-lg-block">
         <img class="bd-placeholder-img" width="200" height="250" src="{{ asset('/storage/'.$posts->getImage()) }}" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>  
    </div>
  </div>
 @endforeach
</div>
@endsection

