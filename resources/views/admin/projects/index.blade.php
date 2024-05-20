@extends('layouts.admin')

@section('content')
<header>
    <div class="container bg-dark py-3 text-danger d-flex align-items-center justify-content-between">
        <h1>
            <strong>
                Projects
            </strong>
        </h1>
        <a class="btn btn-secondary" href="{{route('admin.projects.create')}}">Add project</a>
    </div>
</header>

<section class="py-5">
    <div class="container">
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
                            <td scope="row">{{$project->id}}</td>
                            <td scope="row">
                                <img src="{{$project->img}}" alt="">
                            </td>
                            <td scope="row">{{$project->title}}</td>
                            <td scope="row">{{$project->slug}}</td>
                            <td scope="row">
                                <a class="btn btn-dark" href="{{route('admin.projects.show',$project)}}">
                                    <i class="fas fa-eye fa-xs fa-fw"></i>
                                </a>
                                <a href="">

                                </a>
                                <a href="">

                                </a>
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

    </div>
</section>
@endsection
