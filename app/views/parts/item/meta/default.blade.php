<div class="entry-meta">
    <time class="updated" datetime="{{{ get_the_time('c') }}}">#{{ the_date() }}</time>
    <p class="byline author vcard">{{ __('By', 'giacometti') }} <a
                href="{{{ get_author_posts_url(get_the_author_meta('ID')) }}}" rel="author"
                class="fn">#{{ the_author() }}</a></p>
</div>
