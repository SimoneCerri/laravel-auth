@extends('layouts.admin')

@section('content')
<header>
    <div class="container bg-dark py-3 text-danger">
        <h1>
            <strong>
                Projects
            </strong>
        </h1>
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
                            <td scope="row">View/Edit/Delete</td>
                            
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
