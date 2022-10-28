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

<div class="card-body">
                <h5>Display Comments</h5>
            
                 @include('posts.partials.replies', ['comments' => $viewData["post"]->comments, 'posts_id' => $viewData["post"]->getId()]) 

                <hr />
               </div>

               <div class="card-body">
                <h5>Leave a comment</h5>
                <form method="post" action="{{ route('comment.add') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="comment" class="form-control" />
                        <input type="hidden" name="post_id" value="{{ $viewData["post"]->getId() }}" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Add Comment" />
                    </div>
                </form>
               </div>
@endsection