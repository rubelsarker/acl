@extends('layouts.layout')
@section('title','user management')
@section('content')
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row col-md-8 mx-auto p-b-60 p-t-60">
                <div class="col-md-8 m-auto text-white p-b-30">
                    <h1 style="font-size: 24px;">Update User</h1>
                </div>
                <div class="col-md-4 m-auto text-white p-b-30">
                    <div class="text-md-right">
                        <a href="{{route('users.index')}}" class="btn btn-success"> <i class="mdi mdi-plus"></i> All User </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  pull-up">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card m-b-30">

                    <div class="card-body ">
                        @include('partials._errors')
                        <form action="{{route('users.update',$user->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input value="{{$user->name}}" required name="name" type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input value="{{$user->email}}" required name="email" type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input  name="password" type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="confirm-password">Confirm Password</label>
                                    <input  name="confirm-password" type="password" class="form-control" id="confirm-password" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="font-secondary">Roles</label>
                                <select required name="roles[]" multiple="" class="form-control js-select2" >
                                    @foreach($roles as $key => $role)
                                        <option
                                                @foreach($userRole as $k=>$v )
                                                        {{$k === $key ? 'selected' : ''}}
                                                @endforeach
                                                value="{{$key}}" >{{$key}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
