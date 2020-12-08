@extends('layouts.layout')
@section('title','permission management')
@section('content')
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row col-md-8 mx-auto p-b-60 p-t-60">
                <div class="col-md-8 m-auto text-white p-b-30">
                    <h1 style="font-size: 24px;">Create Permission</h1>
                </div>
                <div class="col-md-4 m-auto text-white p-b-30">
                    <div class="text-md-right">
                        <a href="{{route('permissions.index')}}" class="btn btn-success"> All Permissions </a>
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
                        <form action="{{route('permissions.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input  name="name" type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
