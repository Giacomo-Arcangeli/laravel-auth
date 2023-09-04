@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-4">
                    <img src="{{ $project->cover ?? 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp41IWFGc4DITJ1TKcUvwLnSavXinocukcMc2y5fXEAtCWDx4bQFOU1srExMJLtp3Aklo&usqp=CAU' }}"
                        class="img-fluid h-100" alt="{{ $project->title }}">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text"><small class="text-body-secondary">{{ $project->year }}</small></p>
                        <p class="card-text">{{ $project->description }}</p>
                        <p class="card-text text-body-secondary">Created at: {{ $project->created_at }}</p>
                        <p class="card-text text-body-secondary">Updated at: {{ $project->updated_at }}</p>
                        <div class="buttons d-flex gap-1">
                            <a class="btn btn-primary" href="{{ route('admin.projects.index') }}">Back</a>
                            <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project) }}">Edit</a>
                            <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                                data-bs-target="#{{ $project->id }}">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection