@extends('app.app')
@section('Create Post')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 py-5">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">Posts</th>
                            <th scope="col">Actions</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row" class="text-center">{{ $post->id }}</th>
                                <td>
                                    <h6 class="mb-0">{{ Str::words($post->title, 5, '...') }}</h6>
                                    <p class="mt-3 text-muted">{{ Str::words($post->description, 5, ' ...') }}</p>
                                </td>

                                <td class="text-nowrap align-middle">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="">
                                                <button class="btn btn-sm btn-outline-warning">
                                                    <span class="material-symbols-outlined">
                                                        edit
                                                    </span>
                                                </button>
                                            </a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                                class="mx-2">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-outline-danger">
                                                    <span class="material-symbols-outlined">
                                                        delete
                                                    </span>
                                                </button>
                                            </form>
                                            <a href="{{ route('posts.show', $post->id) }}" class="">
                                                <button class="btn btn-sm btn-outline-success">
                                                    <span class="material-symbols-outlined">
                                                        info
                                                    </span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </td>

                                <td class="text-nowrap align-middle">
                                    {{ $post->created_at->diffForHumans() }}...
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                {{ $posts->onEachSide(5)->links() }}
            </div>
        </div>
    </div>
@endsection
