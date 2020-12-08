@extends('layouts.layout')
@section('title','role management')
@section('content')
    <div class="bg-dark m-b-30">
        <div class="container">
            <div class="row col-md-8 mx-auto p-b-60 p-t-60">
                <div class="col-md-8 m-auto text-white p-b-30">
                    <h1 style="font-size: 24px;">Update Role</h1>
                </div>
                <div class="col-md-4 m-auto text-white p-b-30">
                    <div class="text-md-right">
                        <a href="{{route('roles.index')}}" class="btn btn-success"> All Roles </a>
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
                        <form action="{{route('roles.update',$role->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input value="{{$role->name}}" name="name" type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                            <span style="padding-bottom: 3px;: ">Permission:</span>
                            <div class="form-group">
                                <div class="form-check">
                                    <input  class="form-check-input" type="checkbox" id="checkall" @if(count($permission)==count($rolePermissions)) checked @endif>
                                    <label class="form-check-label" for="gridCheck">
                                        Select All
                                    </label>
                                </div>
                            </div>
                            @foreach($permission as $value)
                                <div class="form-group">
                                    <div class="form-check">
                                        <input {{in_array($value->id,$rolePermissions) ? 'checked' : ''}} name="permission[]" value="{{$value->id}}" class="form-check-input checkbox" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            {{$value->name}}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
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
@section('scripts')
    <script type='text/javascript'>
        $(document).ready(function(){
            // Check or Uncheck All checkboxes
            $("#checkall").change(function(){
                var checked = $(this).is(':checked');
                if(checked){
                    $(".checkbox").each(function(){
                        $(this).prop("checked",true);
                    });
                }else{
                    $(".checkbox").each(function(){
                        $(this).prop("checked",false);
                    });
                }
            });
            // Changing state of CheckAll checkbox
            $(".checkbox").click(function(){
                if($(".checkbox").length == $(".checkbox:checked").length) {
                    $("#checkall").prop("checked", true);
                } else {
                    $("#checkall").removeAttr("checked");
                }

            });
        });
    </script>
@endsection
