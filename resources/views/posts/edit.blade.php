<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <h1>Editar Formulario</h1>

    <form class="formulario" action="{{route('posts.update', $post)}}" method="POST">
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <button class="btn btn-primary" type="submit">Actualizar</button><br>
    </form>

    <br>
    <a class="btn btn-secondary" href="{{ route('posts.index')}}">Regresar</a>
</x-layout>
