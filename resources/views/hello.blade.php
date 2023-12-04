@extends('base')

@section('body')
    Bonjour {{ strtoupper($name) }}
    <x-input name="prenom" :value="$name"/>
@endsection