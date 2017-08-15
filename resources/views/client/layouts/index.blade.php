<!DOCTYPE html>
<html lang="en">

<head>
    @include('client.partials.metadata')
</head>

<body>

<!-- Navigation -->
@include('client.partials.nav')

<!-- Header -->
@include('client.partials.header')

@yield('content')
<!-- /.banner -->

<!-- Footer -->
@include('client.partials.footer')

<!-- Bootstrap core JavaScript -->
@include('client.partials.js_lib')

</body>

</html>
