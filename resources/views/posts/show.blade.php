<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <br>
    <h1 class="titulo">{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="{{ route('posts.index')}}">Regresar</a>
</x-layout>
