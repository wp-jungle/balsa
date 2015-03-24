<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    @include('parts.misc.head')
    #{{ wp_head() }}
</head>

<body #{{ body_class() }}>

@section('body.header')
    @include('parts.header.default')
@show

@yield('body.content')

@section('body.footer')
    @include('parts.footer.default')
@show

#{{ wp_footer() }}
</body>
</html>