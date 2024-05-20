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
        <form action="{{route('admin.projects.store')}}" method="post">
        @csrf
            
        </form>
    </div>
@endsection
