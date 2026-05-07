@extends('layouts.landing')

@section('title','Services')

@section('content')
<h1>Services</h1>
@component('_components.card')
    @slot('title','Service 1')
    @slot('content','Washes')
@endcomponent
@component('_components.card')
    @slot('title','Service 2')
    @slot('content','Trees')
@endcomponent
@component('_components.card')
    @slot('title','Service 3')
    @slot('content','Car')
@endcomponent
@endsection
