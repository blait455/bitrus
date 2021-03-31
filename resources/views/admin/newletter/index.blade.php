@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contacts</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Email</th>
                                @can('edit-users')
                                    <th scope="col">Action</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newsletters as $nl)
                                <tr>
                                    <th scope="row">{{ $nl->id }}</th>
                                    <td>{{ $nl->email }}</td>
                                    <td>
                                        @can('delete-users')
                                            <form action="{{ route('ns.delete', $nl) }}" class="float-left" method="POST">
                                                @csrf
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
