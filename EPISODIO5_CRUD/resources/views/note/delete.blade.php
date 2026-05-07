@extends('layouts.app')

@section('content')
<ul>
@forelse ($notes as $note )
<li><a href="#">{{ $note->title }}</a></li>
@empty
    <p>Datos eliminados:</p>
@endforelse
</ul>
@endsection
