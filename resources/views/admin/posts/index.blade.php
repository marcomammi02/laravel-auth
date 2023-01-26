@extends('layouts.app')

@section('content')
    <table class="table table-dark table-hover">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Slug</th>
                <th scope="col">Title</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->title }}</td>
                        <td><a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">Visita</a></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </table>
    {{ $posts->links() }}
@endsection

