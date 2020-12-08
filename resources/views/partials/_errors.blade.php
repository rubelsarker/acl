@if (count($errors) > 0)
    <div style="background-color: #fcddde;" class="alert  alert-border-danger  alert-dismissible fade show" role="alert">
        <div class="d-flex">
            <div class="icon">
                <i class="icon mdi mdi-alert-octagram"></i>
            </div>
            <div class="content">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
@endif