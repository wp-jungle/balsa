<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    @include('parts.misc.head')
    @php(wp_head())
</head>

<body @php(body_class())>

@section('body.header')
    @include('parts.header.default')
@show

@yield('body.content')

@section('body.footer')
    @include('parts.footer.default')
@show

@php(wp_footer())
</body>
</html>