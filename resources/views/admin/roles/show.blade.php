@extends('layouts.layout')
@section('title','role management')

@section('content')
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-8 m-auto text-white p-b-30">
                    <h1 style="font-size: 24px;" >{{$role->name}} Role</h1>
                </div>
                <div class="col-md-4 m-auto text-white p-b-30">
                    <div class="text-md-right">
                        <a href="{{route('roles.index')}}" class="btn btn-success"> Back </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  pull-up">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="avatar mr-2">
                                <div class="avatar-title rounded bg-dark"><i class="mdi mdi-chart-donut"></i>
                                </div>
                            </div>
                            Role Name : {{$role->name}}
                        </div>
                    </div>
                    <div class="card-body">

                        <p class="text-muted ">Permissions</p>

                        <ul class="list-group ">
                            <li class="list-group-item">
                                @if(!empty($rolePermissions))
                                    @foreach($rolePermissions as $v)
                                        <label class="label label-success"></label>
                                        <span class="badge badge-success p-2" style="font-size: 14px;">{{ $v->name }}</span>
                                    @endforeach
                                @endif
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
