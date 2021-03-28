@extends('template.index')
@section('title')
    Register 
@endsection
@section('content')
<div class="container">
    <div class="row" style="margin-top:100px">
        <div class="col-md-6 shadow p-5 rounded mx-auto">
            <form action="{{ route('admin.create') }}" method="post" class="d-flex flex-column">
                @csrf
                    <h3 class="text-center">Register Here</h3>
                    <hr>
                
                @if (Session::get('success'))
                    <div class="results">
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    </div>
                @elseif (Session::get('fail'))
                    <div class="results">
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    </div>
                @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter full name" class="form-control" value="{{ old('name') }}">
                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="Enter email" class="form-control" value="{{ old('email') }}">
                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" name="password" placeholder="Enter password" class="form-control">
                    <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Register</button>
                </div>
                <a href="admin" class="d-inline-flex mx-auto">Already have Acount!</a>
            </form>
        </div>
    </div>
</div>
@endsection