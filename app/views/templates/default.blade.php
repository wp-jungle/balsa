@extends('layout.default')

@section('body.content')
    @wploop
        @include('parts.item.default')
    @emptywploop
        @include('parts.item.not-found')
    @endwploop
@stop