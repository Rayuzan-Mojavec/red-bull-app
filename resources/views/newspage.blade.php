@extends('core.core')

@section('main-header')

<h1>{{ $title }}</h1>

<div class="row justify-content-center mt-4">
  <div class="col-md-6">
    <form action="/newspage">
      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
        <button class="btn" style="background-color:#FFD300" type="submit" id="button">Search</button>
      </div>
    </form>
  </div>
</div>

@endsection

@section('main-content')

@if ($newspage->count())

<div class="container mb-5 justify-content-center">
  <div class="row justify-content-center">
    @foreach ($newspage as $news)
    <div class="col-md-6">
      <div class="card mb-3" style="background-color: #D9D4CE">
        <div class="row g-0">
          <div class="col-md-4">
            @if ($news->image)
            <div style="max-height: 600px; max-width:500px; overflow:hidden;">
            <img src="{{ asset('storage/' . $news->image ) }}" class="img-fluid" alt="...">
            </div>
            @else
            <img src="https://source.unsplash.com/500x600/?{{ $news->category->cat_name }}" class="img-fluid rounded-start" alt="...">
            @endif
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mb-3">{{ $news->title }}</h5>
              <p class="card-text mt-4">By. <a href="/newspage?author={{ $news->author->username }}">{{ $news->author->name }}</a> in <a href="/newspage?category={{ $news->category->slug }}">{{ $news->category->cat_name }}</a></p>
              <a href="/newspage/{{ $news->slug }}">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@else

<div class="container text-center">
<h3>No post found</h3>
</div>

@endif


<div class="d-flex justify-content-center">
{{ $newspage->links() }}
</div>


@endsection