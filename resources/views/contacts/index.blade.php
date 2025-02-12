<x-layout meta-title="Home contact" meta-description="Home description">

    <h1 class="title-blog">Numeros Telefinicos</h1>

    <a class="btn btn-warning crear-post " href="{{ route('contacts.create')}}">Añadir Número telefonico</a>

    <table class="table table-bordered table-striped text-center mx-auto" style="max-width: 800px;">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre de Contacto</th>
                <th scope="col">Número telefonico</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $index => $contact)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>
                    <h2>
                        <a href="{{ route('contacts.show', $contact) }}">
                            {{ $contact->name }}
                        </a>
                    </h2>
                </td>
                <td>
                    <p>{{$contact->number}}</p>
                </td>
                <td>
                    <a class="btn btn-sm btn-warning registro" href="{{ route('contacts.edit', $contact) }}">Editar</a>
                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger botones" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p class="text-center mt-3"><strong>Total de registros: {{ count($contacts) }}</strong></p>
</x-layout>
