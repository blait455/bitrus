@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Courses <div class="float-right"><a href="{{ route('admin.courses.create') }}" class="btn btn-sm btn-secondary">Create</a></div></div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                @can('edit-users')
                                    <th scope="col">Action</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <th scope="row">{{ $course->id }}</th>
                                    <td>{{ $course->title }}</td>
                                    <td>{{ $course->description }}</td>
                                    <td>
                                        @can('edit-users')
                                            <a href="{{ route('admin.courses.edit', $course->id) }}"><button type="button" class="btn btn-sm btn-primary float-left mr-1">Edit</button></a>
                                        @endcan

                                        @can('delete-users')
                                            <form action="{{ route('admin.courses.destroy', $course) }}" class="float-left" method="POST">
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
