@extends('layouts.app')



@section('title', 'Projects')

@section('content')
    <header>
        <h2 class="my-5">{{ $project->title }}</h2>
        <p>{{ $project->type?->label }}</p>
    </header>

    <main class="d-flex">
        <div class="project-image ">
            <img class="show-img me-5" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
        </div>
        <div class="project-description">
            <div class="card-text">
                <h3>{{ $project->title }}</h3>
                <p class="slogan text-muted">{{ $project->slogan }}</p>
                <p class="content">{{ $project->content }}</p>
            </div>

            <div class="card-buttons d-flex align-items-center">
                <a class="btn btn-secondary" href="{{ route('admin.projects.index') }}"><i
                        class="fa-sharp fa-solid fa-rotate-left"></i></a>
                <a class="btn btn-warning mx-2" href="{{ route('admin.projects.edit', $project->id) }}"><i
                        class="fa-solid fa-pen-to-square"></i></a>
                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-ban"></i></button>

                </form>
            </div>



        </div>
    </main>

@endsection
