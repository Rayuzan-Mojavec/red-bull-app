@extends('core.core')

@section('main-header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">{{ $news->title }}</h1>
            <p>By. <a href="/newspage?author={{ $news->author->username }}">{{ $news->author->name }}</a> in <a
                    href="/newspage?category={{ $news->category->slug }}">{{ $news->category->cat_name }}</a></p>
        </div>
    </div>
</div>

@endsection

@section('main-content')

<div class="container img-fluid">
    <div class="row justify-content-center mb-5 img-fluid">
        <div class="col-md-8">

            @if ($news->image)
            <img src="{{ asset('storage/' . $news->image ) }}" class="img-fluid" alt="...">
            @else
            <img src="https://source.unsplash.com/960x540/?{{ $news->category->cat_name }}" class="img-fluid" alt="...">
            @endif
            <p>{!! $news->body !!} </p>
            <div class="mt-5">
            <a href="/newspage" class="mt-0">Back to newspage</a>
            </div>
        </div>
    </div>
</div>

@endsection