<x-layout :meta-title="$contact->name" :meta-description="$contact->number">
    <br>
    <h1 class="titulo">{{ $contact->name }}</h1>
    <p>{{ $contact->number }}</p>
    <a href="{{ route('contacts.index')}}">Regresar</a>
</x-layout>
