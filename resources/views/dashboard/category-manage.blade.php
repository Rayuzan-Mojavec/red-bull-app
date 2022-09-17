@extends('core.dashcore')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My News</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-9">
  <a href="/dashboard/news/create" class="btn mb-3" style="background-color: #1D19AC; color:white">Create new news</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category Name</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->cat_name }}</td>
        <td>
          <a href="#" class="badge btn-warning">
            <span data-feather="feather">
            </span>
          </a>
          <form action="#" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('This function is still under development')"><span data-feather="x"></span></button>
          </form>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection