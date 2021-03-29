@extends('template.index')
@section('title')
    News
@endsection
@section('content')
    <div class="container">
        <div style="margin-top: 50px" class="d-flex justify-content-between">
            <a href="{{ url('registerPost') }}" class="btn btn-danger mx-5">Create new Post</a>
            @if (Session::get('logout'))
                <div class="results">
                    <div class="alert alert-success">
                        {{ Session::get('logout') }}
                    </div>
                </div>
            @endif
            @if (Session::get('success'))
                <div class="results">
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            @if (!session()->has('LoggedUser'))
                <div>
                    <a href="{{ url('login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ url('register') }}" class="btn btn-primary mr-5 ">Register</a>
                </div>
            @else
                <div>
                    <a href="{{ url('logout') }}" class="btn btn-primary mr-5">Logout</a>
                </div>
            @endif
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