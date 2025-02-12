<x-layout
    meta-title="Crear nuevo contacto"
    meta-description="Formulario">
    <h1>Crear nuevo Contacto</h1>

    <form class="formulario" action="{{route('contacts.store')}}" method="POST">
        @csrf
        @include('contacts.form-fields')
        <button class="btn btn-success" type="submit">Crear</button><br>
    </form>
    <br>

    <a href="{{ route('contacts.index')}}">Regresar</a>
</x-layout>
