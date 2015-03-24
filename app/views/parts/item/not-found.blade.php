<article class="not-found">
    <header>
        <h2 class="entry-title">{{ __('Sorry, but the page you were trying to view does not exist.', BAOBAB_TEXTDOMAIN) }}</h2>
    </header>
    <div class="entry-summary">
        <p>{{ __('It looks like this was the result of either:', BAOBAB_TEXTDOMAIN) }}</p>
        <ul>
            <li>{{ __('a mistyped address', BAOBAB_TEXTDOMAIN) }}</li>
            <li>{{ __('an out-of-date link', BAOBAB_TEXTDOMAIN) }}</li>
        </ul>

        #{{ get_search_form() }}
    </div>
</article>
