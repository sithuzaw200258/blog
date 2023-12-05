@extends('app.app')
@section('Create Post')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h2 class="mb-0">Hello</h2>
                                <p class="text-muted">What is on your mind?</p>
                            </div>

                            <div class="">
                                <a href="{{ route('post.create') }}" class="btn btn-primary">Create Post</a>
                            </div>
                        </div>
                    </div>
                </div>

                @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @foreach ($posts as $post)
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="">
                                <h3 class="mb-0">{{ $post->title }}</h3>
                                <div class="text-muted"> {{ $post->created_at->diffForHumans() }}...</div>

                                <p class="mt-3 text-muted">{{ Str::words($post->description, 50, ' ...') }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="{{ route('post.edit', $post->id) }}" class="">
                                        <button class="btn btn-sm btn-outline-warning">
                                            <span class="material-symbols-outlined">
                                                edit
                                            </span>
                                        </button>
                                    </a>
                                    <form action="{{ route('post.destroy', $post->id) }}" method="POST" class="mx-2">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-outline-danger">
                                            <span class="material-symbols-outlined">
                                                delete
                                            </span>
                                        </button>
                                    </form>
                                </div>
                                <a href="{{ route('post.show', $post->id) }}" class="btn btn-link">See more...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
