@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end my-4">
        {{-- create --}}
        <a href="{{ route('admin.projects.create') }}" class="btn btn-success me-4">Add new project</a>

    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Created at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->created_at }}</td>
                    {{-- buttons --}}
                    <td>
                        <div class="d-flex justify-content-between">
                            {{-- show --}}
                            <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary">Show</a>
                            {{-- edit --}}
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">Edit</a>

                            {{-- delete --}}
                            <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                                data-bs-target="#{{ $project->id }}">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">
                        <h3>Sorry, there are not projects!</h3>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
