@extends('template.index')
@section('title')
    Create New Post
@endsection
@section('content')
<div class="container">
    <div class="row" style="margin-top:100px">
        <div class="col-md-8 shadow p-5 rounded mx-auto background" >
            <form action="{{ route('createPost') }}" method="post" class="d-flex flex-column">
                @csrf
                    <h1 class="font-weight-bold">Create New Post</h1>
                    <hr>
                
                @if (Session::get('fail'))
                    <div class="results">
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    </div>
                @endif
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="title" placeholder="Enter Title" class="form-control" value="{{ old('name') }}">
                    <span class="text-danger">@error('title') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="username">Content</label>
                    <textarea type="text" name="content" placeholder="Enter Content" class="form-control" value="{{ old('username') }}"></textarea>
                    <span class="text-danger">@error('content') {{ $message }} @enderror</span>
                </div>
                <div class="form-group d-inline-flex mx-auto ">
                    <button type="submit" class="btn px-5 btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection