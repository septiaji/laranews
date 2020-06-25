@extends('layouts.app')

@section('title')
    User
@endsection

@section('content')
    <div class="container mt-4">
        <x-jumbotron
            title="Welcome {{ Auth::user()->name }}"
            subtitle="You can manage your posts here"
            description="Just click create post menu to add post. And click the post to edit or delete"
        />
        @foreach ($posts as $post)
            <x-post
                :title="$post->title"
                :author="$post->user->name"
                :thumbnail="$post->thumbnail"
                :description="$post->content"
                :publishedAt="$post->created_at"
                :href="'/user/post/'.$post->id"
            />
        @endforeach
        {{ $posts->links() }}
    </div>
@endsection
