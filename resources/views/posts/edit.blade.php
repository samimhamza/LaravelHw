@extends('template.index')
@section('title')
    Post Update
@endsection
@section('content')
<div class="container">
    <div class="row" style="margin-top:100px">
        <div class="col-md-8 shadow p-5 rounded mx-auto background" >
            <form action="{{ route('updatePost') }}" method="POST" class="d-flex flex-column">
                @csrf
                    <h1 class="font-weight-bold">Edit Post</h1>
                    <hr>
                
                @if (Session::get('fail'))
                    <div class="results">
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    </div>
                @endif
                <input type="hidden" name="id" value="{{ $post->id }}">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Enter title" class="form-control" value="{{ $post->title }}">
                    <span class="text-danger">@error('title') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="content">Username</label>
                    <textarea type="text" name="content" placeholder="Enter content" class="form-control" >{{ $post->content }}</textarea>
                    <span class="text-danger">@error('content') {{ $message }} @enderror</span>
                </div>
                <div class="form-group d-inline-flex mx-auto ">
                    <button type="submit" class="btn px-5 btn-primary">Update Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection