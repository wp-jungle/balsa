<form role="search" method="get" class="search-form form-inline" action="{{{ home_url('/') }}}">
    <label class="sr-only">{{ __('Search for:', BAOBAB_TEXTDOMAIN) }}</label>

    <div class="input-group">
        <input type="search" value="{{{ get_search_query() }}}" name="s" class="search-field form-control"
               placeholder="{{{ sprintf(__('Search on "%s"', BAOBAB_TEXTDOMAIN), get_bloginfo('name')) }}}">
        <span class="input-group-btn">
            <button type="submit" class="search-submit btn btn-default">{{ __('Search', BAOBAB_TEXTDOMAIN) }}</button>
        </span>
    </div>
</form>
