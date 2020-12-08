<script src="{{url('')}}/assets/vendor/jquery/jquery.min.js"   ></script>
<script src="{{url('')}}/assets/vendor/jquery-ui/jquery-ui.min.js"   ></script>
<script src="{{url('')}}/assets/vendor/popper/popper.js"   ></script>
<script src="{{url('')}}/assets/vendor/bootstrap/js/bootstrap.min.js"   ></script>
<script src="{{url('')}}/assets/vendor/select2/js/select2.full.min.js"   ></script>
<script src="{{url('')}}/assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js"   ></script>
<script src="{{url('')}}/assets/vendor/listjs/listjs.min.js"   ></script>
<script src="{{url('')}}/assets/vendor/moment/moment.min.js"></script>
<script src="{{url('')}}/assets/vendor/daterangepicker/daterangepicker.js"></script>
<script src="{{url('')}}/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="{{url('')}}/assets/vendor/bootstrap-notify/bootstrap-notify.min.js"   ></script>
<script src="{{url('')}}/assets/js/atmos.min.js"></script>
<!--sweet alert-->
<script src="{{url('')}}/assets/vendor/sweetalert/sweetalert2.all.min.js"></script>
<script src="{{url('')}}/assets/js/swal-data.js"></script>
<!--notify-->
<script src="{{url('')}}/assets/js/bootstrap-notify-data.js"></script>
<script src="{{url('')}}/js/functions.js" ></script>
<!--page specific scripts for demo-->
@yield('scripts')

@livewireScripts
<script>
    $(document).on("click","#delete" , function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to delete this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                window.location.href = link;
            }
            else{
                Swal.fire(
                    'Your data safe!',
                )
            }
        })
    });
    @if (Session::get('success'))
        notification('Success','{{Session::get('success')}}','success')
    @elseif(Session::get('info'))
        notification('Info','{{Session::get('info')}}','info')
    @elseif(Session::get('warning'))
        notification('Warning','{{Session::get('warning')}}','warning')
    @elseif(Session::get('danger'))
        notification('Danger','{{Session::get('danger')}}','danger')
    @endif
</script>
