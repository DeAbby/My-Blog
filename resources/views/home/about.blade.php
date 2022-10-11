@extends('Layout.app1')
@section('title', 'My Blog')
@section('content')
<div class="container">
<div class="row">
<div>
<p class="lead">{{ $viewData["description"]}}</p>
</div>
<div>
<p class="text-center">{{ $viewData["author"] }}</p>
</div>
</div>
</div>
@endsection


