@extends('core.dashcore')

@section('container')
    

<div class="container text-center my-5">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mb-2">{{ $news->title }}</h1>
        </div>
    </div>
</div>

<div class="container img-fluid">
    <div class="row img-fluid">
        <div class="col-md-8 fs-6 ">
            @if ($news->image)
            <img src="{{ asset('storage/' . $news->image ) }}" class="img-fluid" alt="...">
            @else
            <img src="https://source.unsplash.com/960x540/?{{ $news->category->cat_name }}" class="img-fluid" alt="...">
            @endif
            <p class="fs-5">{!! $news->body !!} </p>
        </div>
        <div class="mt-2">
        <a href="/dashboard/news" class="btn btn-success mb-5">Back to my news</a>
        </div>
    </div>
</div>

@endsection
