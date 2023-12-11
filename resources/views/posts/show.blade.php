@extends('app.app')
@section('Detail Page')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card my-5">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <h2 class="mb-0">Detail Post</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="">
                            <h3 class="mb-0">{{ $post->title }}</h3>
                            <div class="text-muted"> {{ $post->created_at->diffForHumans() }}...</div>
                        <p class="mt-3 text-muted">{{ $post->description }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
