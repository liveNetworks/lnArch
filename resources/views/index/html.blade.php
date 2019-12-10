@inject('VMIndex', 'App\Providers\VMIndexProvider')

@extends('layout.ln')

@section('title')
    {{ $VMIndex->title }}
@endsection

@section('content')
    {{ $VMIndex->title }}
    {{ $VMIndex->date }}

@endsection