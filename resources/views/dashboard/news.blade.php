@extends('core.dashcore')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My News</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-9">
  <a href="/dashboard/news/create" class="btn mb-3" style="background-color: #1D19AC; color:white">Create new news</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($newspage as $news)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $news->title }}</td>
        <td>{{ $news->category->cat_name }}</td>
        <td>
          <a href="/dashboard/news/{{ $news->slug }}" class="badge btn-info">
            <span data-feather="eye">
            </span>
          </a>
          <a href="/dashboard/news/{{ $news->slug }}/edit" class="badge btn-warning">
            <span data-feather="feather">
            </span>
          </a>
          <form action="/dashboard/news/{{ $news->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('You sure mate? This ain\'t a joke')"><span data-feather="x"></span></button>
          </form>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection