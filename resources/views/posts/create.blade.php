<x-layout
    meta-title="Crear nuevo Post"
    meta-description="Formulario">
    <h1>Crear nuevo Post</h1>

    <form class="formulario" action="{{route('posts.store')}}" method="POST">
        @csrf
        @include('posts.form-fields')
        <button class="btn btn-success" type="submit">Crear</button><br>
    </form>
    <br>

    <a href="{{ route('posts.index')}}">Regresar</a>
</x-layout>
