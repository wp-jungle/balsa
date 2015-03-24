<article #{{ post_class() }}>
    <header>
        <h2 class="entry-title"><a href="{{{ get_permalink() }}}">#{{ the_title() }}</a></h2>
        @include('parts.item.meta.default')
    </header>
    <div class="entry-summary">
        #{{ the_excerpt() }}
    </div>
</article>
