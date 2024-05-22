@extends('layouts.admin')

@section('content')
    <header class="py-3 bg-dark text-danger">
        <div class="container">
            <h1>
                <strong>
                    Insert a new Project !
                </strong>
            </h1>
        </div>
    </header>
    <div class="container py-5">
        @include('partials.validation-messagge')
        <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelpId" placeholder="New Project" value="{{old('title')}}"/>
                <small id="titleHelpId" class="form-text text-muted">Insert a title</small>
                @error('title')
                    <div class="text-danger py-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="url1" class="form-label">GitHub link</label>
                <input type="text" class="form-control @error('url1') is-invalid @enderror" name="url1" id="url1"
                    aria-describedby="url1HelpId" placeholder="New Project" value="{{old('url1')}}"/>
                <small id="url1HelpId" class="form-text text-muted">Insert a link</small>
                @error('url1')
                    <div class="text-danger py-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="url2" class="form-label">Preview link</label>
                <input type="text" class="form-control @error('url2') is-invalid @enderror" name="url2" id="url2"
                    aria-describedby="url2HelpId" placeholder="New Project" value="{{old('url2')}}"/>
                <small id="url2HelpId" class="form-text text-muted">Insert a link</small>
                @error('url2')
                    <div class="text-danger py-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="file" class="form-control @error('img') is-invalid @enderror" name="img" id="img"
                    aria-describedby="imgHelpId" placeholder="New image for project" value="" />
                <small id="imgHelpId" class="form-text text-muted">Insert an image</small>
                @error('img')
                    <div class="text-danger py-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="6"
                    placeholder="Insert your content here..">{{old('content')}}</textarea>
                @error('content')
                    <div class="text-danger py-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">
                Create the project
            </button>
        </form>
    </div>
@endsection