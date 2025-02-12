<x-layout meta-title="Blog title" meta-description="Home description">

    <h1 class="title-blog">BLOG</h1>

    <a class="btn btn-warning crear-post " href="{{ route('posts.create')}}">Crar nuevo Post</a>

    <table class="table table-bordered table-striped text-center mx-auto" style="max-width: 800px;">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $index => $post)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>
                    <h2>
                        <a href="{{ route('posts.show', $post) }}">
                            {{ $post->title }}
                        </a>
                    </h2>
                </td>
                <td>
                    <a class="btn btn-sm btn-warning registro" href="{{ route('posts.edit', $post) }}">Editar</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger botones" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p class="text-center mt-3"><strong>Total de registros: {{ count($posts) }}</strong></p>

</x-layout>
