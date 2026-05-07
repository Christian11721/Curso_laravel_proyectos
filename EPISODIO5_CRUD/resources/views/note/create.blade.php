@extends('layouts.app')

@section('content')
<a href="{{ route('note.index') }}">Atras</a>
<form method="POST" action="{{ route('note.store') }}">
    @csrf
    <label>Titulo:</label>
    <input type="text" name="title"/> <br>
    @error('title')
    <p style="color:red">{{$message}}</p>
    @enderror

     <label>Descripción:</label>
    <input type="text" name="description"/>
    @error('description')
    <p style="color:red">{{$message}}</p>
    @enderror
    <input type="submit" value="Create"/>
</form>
@endsection
