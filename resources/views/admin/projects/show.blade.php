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
                <div class="col-4">
                    <span scope="row">{{ $project->id }}</span>
                </div>
                <div class="col-4">
                    <img src="{{ $project->img }}" alt="">
                </div>
                <div class="col-4">
                    <span scope="row">{{ $project->content }}</span>
                </div>
            </div>
        </div>
    </section>
@endsection
