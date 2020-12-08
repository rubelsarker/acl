@extends('layouts.layout')
@section('title','role management')
@section('styles')
    <link rel="stylesheet" href="{{url('')}}/assets/vendor/DataTables/datatables.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/vendor/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <style>
        .icon-text i{
            font-size: 25px;
            margin: 0 1px;
        }
    </style>
@endsection
@section('content')
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row p-b-60 p-t-60">
                <div class="col-md-8 m-auto text-white p-b-30">
                    <h1 style="font-size: 24px;" > Roles</h1>
                </div>
                <div class="col-md-4 m-auto text-white p-b-30">
                    <div class="text-md-right">
                        <a href="{{route('roles.create')}}" class="btn btn-success"> <i class="mdi mdi-plus"></i> Add New </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container  pull-up">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive p-t-10">
                            <table id="example" class="table" style="width:100%">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($roles as $key => $role)
                                <tr>
                                    <td style="background-color: #ffffff;">{{ ++$key }}</td>
                                    <td>{{$role->name}}</td>
                                    <td class="text-center">
                                        <a title="view"  href="{{route('roles.show',$role->id)}}" class="text-info icon-text"><i class="mdi mdi-eye"></i></a>
                                        @can('role-edit')
                                        <a title="edit"  href="{{route('roles.edit',$role->id)}}" class="text-primary icon-text"><i class="mdi mdi-square-edit-outline"></i></a>
                                        @endcan
                                        @can('role-delete')
                                        <a href="{{route('roles.destroy',$role->id)}}" title="delete" id="delete"  class="text-danger icon-text"><i class="mdi mdi-trash-can"></i></a>
                                        @endcan
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
    </div>
@endsection
@section('scripts')
    <script src="{{url('')}}/assets/vendor/DataTables/datatables.min.js"></script>
    <script src="{{url('')}}/assets/js/datatable-data.js"></script>
@endsection
