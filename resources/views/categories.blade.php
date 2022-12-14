@extends('core.core')

@section('main-header')
<h1>News Categories</h1>
@endsection

@section('main-content')

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4 mb-4">
            <a href="/newspage?category={{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500/?{{ $category->cat_name }}" class="card-img"
                        alt="...">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->cat_name }}
                        </h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>



@endsection