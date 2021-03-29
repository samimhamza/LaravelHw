@extends('template.index')
@section('title')
    News
@endsection
@section('content')
    <div class="container">
        <div style="margin-top: 50px" class="d-flex justify-content-between">
            <button class="btn btn-danger mx-5">Create new Post</button>
            <div>
                <button class="btn btn-primary">Register</button>
                <button class="btn btn-primary mr-5 ">Login</button>
            </div>
        </div>
        <div class="d-flex flex-wrap">
            @foreach ($posts as $post)
                <div class="card mx-5" style="margin-top:50px;width:450px">
                    <div class="card-body text-center">
                        <h5 class="card-title font-weight-bold">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                        <button class="btn btn-dark">Edit</button>
                        <button class="btn btn-dark">Delete</button>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>
@endsection