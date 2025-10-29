@extends('layout')

@section('content')
    <div class="container">
        <div>

        </div>
        <div class="card">
            <h5 class="card-header text-center">Edit Post</h5>
            <div class="card-body">

                <form action="/post/{{ $post->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control"
                        name="name" id="name"
                        value="{{ old('name', $post->name) }}"
                        aria-describedby="emailHelp"
                            placeholder="Enter Name" value="{{ $post->name }}" >
                        <small id="emailHelp" class="form-text text-muted">ENTER NAME.</small>
                         @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description </label>


                        <textarea class="form-control" name="description" id="description">

                             {{ old('description', $post->description) }}

                        </textarea>
                         @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <br>
                        <select name="category_id" id="">
                        <option value="">Select Category</option>

                            @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}" {{ $cat->id == $post->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                            @endforeach

                        </select>



                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/post" class="btn btn-success">Back</a>
                </form>

            </div>
        </div>
    </div>
@endsection
