@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="container mt-4">
            <x-post
                :title="$post->title"
                :author="$post->user->name"
                :thumbnail="$post->thumbnail"
                :description="$post->content"
                :publishedAt="$post->created_at"
                href=""
            />
    </div>
@endsection
