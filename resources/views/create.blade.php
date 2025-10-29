@extends('layout')

@section('content')
    <div class="container">
        <div>

        </div>
        <div class="card">
            <h5 class="card-header text-center">Content</h5>
            <div class="card-body">

                <form action="/post" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control"
                        name="name" id="name" aria-describedby="emailHelp"
                            placeholder="Enter Name"
                            value="{{ old('name') }} ">
                        <small id="emailHelp" class="form-text text-muted">ENTER NAME.</small>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description </label>
                        <input type="text" class="form-control"
                        value="{{ old('description') }}"
                        id="description"
                        placeholder="Description"
                        name="description" >
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select Option</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>

                        @endforeach


                    </select>
                    @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/post" class="btn btn-success">Back</a>
                </form>

            </div>
        </div>
    </div>
@endsection
