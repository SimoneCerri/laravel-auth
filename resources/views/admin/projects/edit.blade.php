@extends('layouts.admin')

@section('content')
    <header class="py-3 bg-dark text-danger">
        <div class="container">
            <h1>
                <strong>
                    Edit the selected Project..
                </strong>
            </h1>
        </div>
    </header>
    <div class="container py-5">
        @include('partials.validation-messagge')
        <form action="{{ route('admin.projects.update', $project) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelpId" placeholder="New title" value="{{old('title', $project->title) }}" />
                <small id="titleHelpId" class="form-text text-muted">Change the title</small>
                @error('title')
                    <div class="text-danger py-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex py-3">
                <img src="{{ $project->img }}" alt="">
                <div class="mb-3 px-3">
                    <label for="img" class="form-label">Image</label>
                    <input type="text" class="form-control @error('img') is-invalid @enderror" name="img"
                        id="img" aria-describedby="imgHelpId" placeholder="New image"
                        value="{{ old('img',$project->img) }}" />
                    <small id="imgHelpId" class="form-text text-muted">Change the image</small>
                    @error('img')
                        <div class="text-danger py-2">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 py-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="6"
                    placeholder="Update the content here..">{{old('content', $project->content) }}</textarea>
                @error('content')
                    <div class="text-danger py-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">
                Save changes
            </button>
        </form>
    </div>
@endsection