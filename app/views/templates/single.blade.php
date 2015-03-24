@extends('layout.default')

@section('body.content')
    @wploop
        @include($postPartName)
    @emptywploop
        @include('parts.single.not-found')
    @endwploop
@stop