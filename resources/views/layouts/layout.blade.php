<!DOCTYPE html>
<html lang="en">
<head>
   @include('partials._head')
</head>
<body class="sidebar-pinned ">
<!--site header begins-->
@include('partials._sidebar')
<!--site header ends -->
<main class="admin-main">
    <!--site header begins-->
    @include('partials._header')
    <!--site header ends -->
    <section class="admin-content">
        {{ isset($slot)?$slot:null }}
        @yield('content')
    </section>
</main>
@include('partials._searchModal')
@include('partials._script')
</body>
</html>
