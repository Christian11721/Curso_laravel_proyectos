@extends('layouts.app')

@section('content')
<a href="{{ route('note.create') }}">Crear una nota</a>
<ul>
@forelse ($notes as $note )
<li>
    <a href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a>
    <a href="{{ route('note.edit', $note->id) }}">EDIT</a>
    <form method="POST" action="{{ route('note.destroy', $note->id) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="DELETE"/>
    </form>
    @empty
    <p>No existen datos:</p>
@endforelse
</ul>
@endsection
