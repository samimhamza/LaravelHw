@extends('template.index')
@section('title')
    Login 
@endsection
@section('content')
    <div class="container">
        <div class="row" style="margin-top:100px">
            <div class="col-md-6 shadow p-5 rounded mx-auto background">
                <form action="{{ route('adminpage.check') }}" method="POST" class="d-flex flex-column">
                    @csrf
                        <h1 class="font-weight-bold"">Login</h1>
                        <hr>
                    @if (Session::get('fail'))
                        <div class="results">
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="emailorusername">Email or username</label>
                        <input type="text" name="emailorusername" placeholder="Enter email" class="form-control" value="{{ old('emailorusername') }}">
                        <span class="text-danger">@error('emailorusername') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Enter password" class="form-control">
                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group d-inline-flex mx-auto">
                        <button type="submit" class="btn px-5 btn-primary">Login</button>
                    </div>
                    <a href="register" class="d-inline-flex mx-auto">Register new user!</a>
                </form>
            </div>
        </div>
    </div>
@endsection