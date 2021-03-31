@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts <div class="float-right"><a href="{{ route('admin.blog.create') }}" class="btn btn-sm btn-secondary">Create</a></div></div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Date</th>
                                @can('edit-users')
                                    <th scope="col">Action</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">{{ $post->id }}</th>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        @can('edit-users')
                                            <a href="{{ route('admin.blog.edit', $post) }}"><button type="button" class="btn btn-sm btn-primary float-left mr-1">Edit</button></a>
                                        @endcan

                                        @can('delete-users')
                                            <form action="{{ route('admin.blog.destroy', $post) }}" class="float-left" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
