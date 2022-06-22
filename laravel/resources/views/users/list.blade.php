@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('users/new')}}"> new user </a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1> List of Users</h1>
        
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name </th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                        @foreach(@users as $u)

                                <tr>
                                    <th scope="row">{{ $u->id }}</th>
                                    <td>{{ $u->name}}</td>
                                    <td>{{ $u->email}}</td>
                                    <td>
                                        <a href="{{ url('users/{{ $u->id }}/update') }}" class="btn btn-info">Update</a>
                                    </td>
                                    <td>
                                        <form action="users/delete/{{ $u->id }}" method="post"></form>
                                        @csrf 
                                        @method('delete')
                                        <a href="{{ url('users/delete') }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                        @endforeach

                            </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection