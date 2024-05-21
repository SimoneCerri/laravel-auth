@extends('layouts.admin')

@section('content')
    <header>
        <div class="container bg-dark py-3 text-danger d-flex align-items-center justify-content-between">
            <h1>
                <strong>
                    Projects
                </strong>
            </h1>
            <a class="btn btn-secondary" href="{{ route('admin.projects.create') }}">Add project</a>
        </div>
    </header>
    <section class="py-5">
        <div class="container">
            @if (session('status'))
                <div class="alert alert-success d-flex align-items-center justify-content-between">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h4>
                List of the projects:
            </h4>
            <div class="table-responsive">
                <table class="table table-secondary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">IMAGE</th>
                            <th scope="col">TITLE</th>
                            <th scope="col">SLUG</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr class="">
                                <td scope="row">{{ $project->id }}</td>
                                <td scope="row">
                                    <img src="{{ $project->img }}" alt="">
                                </td>
                                <td scope="row">{{ $project->title }}</td>
                                <td scope="row">{{ $project->slug }}</td>
                                <td scope="row">
                                    <a class="btn btn-dark" href="{{ route('admin.projects.show', $project) }}">
                                        <i class="fas fa-eye fa-xs fa-fw"></i>
                                    </a>
                                    <a class="btn btn-dark" href="{{ route('admin.projects.edit', $project) }}">
                                        <i class="fas fa-pencil fa-xs fa-fw"></i>
                                    </a>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modalId-{{ $project->id }}">
                                        <i class="fas fa-trash-can fa-xs fa-fw"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalId-{{ $project->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="modalTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId">
                                                        Are you sure to delete {{ $project->title }} project ?
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">❌care❌care❌</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('admin.projects.destroy', $project) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            Delete this project
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="">
                                <td scope="row" colspan="4">No projects to show</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $projects->links('pagination::bootstrap-5') }}
            {{-- php artisan vendor:publish --}}
        </div>
    </section>
@endsection
