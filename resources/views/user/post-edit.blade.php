@extends('layouts.app')

@section('title')
    User - Create Post
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card bg-dark text-white">
            <div class="card-body">
                <h2 class="card-title">Create Post</h2>
                <x-post-form
                    :action="route('user.post.update', ['post' => $post->id])"
                    :title="$post->title"
                    :thumbnail="$post->thumbnail"
                    :content="$post->content"
                    :id="$post->id"
                />
            </div>
        </div>
    </div>
@endsection
