@extends('layout')

@section('content')

    @foreach ($data as $item)
        <p>{{ $item }}</p>
    @endforeach

@endsection
