@extends('template.index')
@section('title')
    Login 
@endsection
@section('content')
    <div class="container">
        <div class="row" style="margin-top:100px">
            <div class="col-md-6 shadow p-5 rounded mx-auto">
                <form action="" class="d-flex flex-column">
                        <h3 class="text-center">Login</h3>
                        <hr>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Enter email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Password</label>
                        <input type="password" name="password" placeholder="Enter password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                    <a href="register" class="d-inline-flex mx-auto">Register new user!</a>
                </form>
            </div>
        </div>
    </div>
@endsection