@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- voltando do form -->
                <div class="card-header">
                    <h2> <a href=" {{ url('users')}}"> Back </a> </h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1> List of Users</h1>

                    <!-- verifica se  o id e passado, retornando outro forms-->
                    @if( Request::is('*/edit'))

                            <!-- form - update / boosttrap**-->
                            <form action="{{ url('users/update') }}/{{ $user->id }}" method="post">
                            <!-- gera o token do form -->    
                            @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> Name: </label>
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> E-mail: </label>
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" >
                                </div>

                                <button type="submit" class="btn btn-primary">Register  </button>
                            </form>

                    @else

                        <!-- form cadastro / boosttrap**-->
                        <form action="{{ url('users/add') }}" method="post">
                        <!-- gera o token do form -->    
                        @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Name: </label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> E-mail: </label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>

                            <button type="submit" class="btn btn-primary"> Register  </button>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection