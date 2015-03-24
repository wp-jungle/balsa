@extends('layout.default')

@section('body.content')
    <article class="{{{ join( ' ', get_post_class()) }}}">
        <div class="page-bg pad-top pad-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 page-content">
                        @include('parts.header.page')
                        <div class="entry-content">
                            <div class="alert alert-warning">
                                {{ __('Sorry, but the page you were trying to view does not exist.', 'giacometti') }}
                            </div>

                            <p>{{ __('It looks like this was the result of either:', 'giacometti') }}</p>
                            <ul>
                                <li>{{ __('a mistyped address', 'giacometti') }}</li>
                                <li>{{ __('an out-of-date link', 'giacometti') }}</li>
                            </ul>

                            #{{ get_search_form() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@stop