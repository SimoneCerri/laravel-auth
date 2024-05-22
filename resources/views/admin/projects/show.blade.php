@extends('layouts.admin')

@section('content')
    <header>
        <div class="container bg-dark py-3 text-danger">
            <h1>
                <strong>
                    {{ $project->title }}
                </strong>
            </h1>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <span class="fw-bold">Project ID:</span> <br>
                    <span scope="row">{{ $project->id }}</span>
                </div>
                <div class="col-4">
                    @if (Str::startsWith($project->img, 'https://'))
                        <img src="{{ $project->img }}" alt="">
                    @else
                        <img src="{{ asset('storage/' . $project->img) }}" alt="">
                    @endif
                </div>
                <div class="col-3">
                    <span class="fw-bold">GitHub:</span> <br>
                    <span scope="row">{{ $project->url1 }}</span>
                </div>
                <div class="col-3">
                    <span class="fw-bold">Preview:</span> <br>
                    <span scope="row">{{ $project->url2 }}</span>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row text-center">
                <div class="col-12">
                    <span class="fw-bold">Description:</span> <br>
                    <span scope="col-12">{{ $project->content }}</span>
                </div>
            </div>
        </div>
    </section>
@endsection
