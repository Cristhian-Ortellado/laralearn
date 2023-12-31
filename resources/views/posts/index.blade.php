@extends('layouts.app')

@section('content')

    @include('posts.header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())
            <x-posts-grid :posts="$posts"/>

            {{ $posts->links() }}
        @else
            <p class="text-center">Empty posts.</p>
        @endif

    </main>
@endsection
