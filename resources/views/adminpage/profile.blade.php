@extends('template.index')
@section('title')
    Admin
@endsection
@section('content')
    <div class="container">
        <div class="row p-3 shadow rounded background " style="margin-top:100px">
            <h1 class="font-weight-bold">Profile Info</h1><hr>
            <table class="table table-hover">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>UserName</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $LoggedUserInfo->name }}</td>
                        <td>{{ $LoggedUserInfo->email }}</td>
                        <td>{{ $LoggedUserInfo->username }}</td>
                        <td><a href="logout">Logout</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection