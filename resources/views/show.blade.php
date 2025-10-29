@extends('layout')

@section('content')
    <div class="container">

        <div class="card">
            <h5 class="card-header text-center">Content</h5>
            <div class="card-body">
               <h5 class="">{{ $post->name }}</h5>
               <p>{{ $post->description }}</p>
               <p class='font-bold'>Category : {{ $post->categories->name }}</p>

            </div>
        </div>
        <div>
            <a href="/post" class="btn btn-success">Back</a>
        </div>
    </div>
@endsection
