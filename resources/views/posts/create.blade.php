@extends('app.app')
@section('Create Post')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <div class="">
                                <h2 class="mb-0">Create New Post</h2>
                            </div>
                            <div class="">
                                <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to home</a>
                            </div>
                        </div>

                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title">Post Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Post Description</label>
                                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                            </div>

                            <button class="btn btn-primary">Create Post</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
