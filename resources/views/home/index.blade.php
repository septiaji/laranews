@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="container mt-4">
        <x-jumbotron
            title="Welcome to Laranews Project"
            subtitle="Develop by Rianda Septiaji"
            description="Website baca berita sederhana"
        />
        @foreach ($posts as $post)
            <x-post
                :title="$post->title"
                :author="$post->user->name"
                :thumbnail="$post->thumbnail"
                :description="$post->content"
                :publishedAt="$post->created_at"
                :href="'/post/'.$post->id"
            />
        @endforeach
        {{ $posts->links() }}
    </div>
@endsection
