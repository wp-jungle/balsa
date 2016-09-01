<article @php(post_class())>
    <header class="entry-header">
        @if(has_post_thumbnail())
            <div class="featured-image">
                @php(the_post_thumbnail())
            </div>
        @endif

        <h1>{!! get_the_title() !!}</h1>
        @include('parts.single.meta.default')
    </header>

    <div class="entry-content">
        @php(the_content())
    </div>

    <footer class="entry-footer">
        @php(previous_post_link('<span class="previous-entry">%link</span>'))
        @php(next_post_link('<span class="next-entry">%link</span>'))
    </footer>

    <?php
        // TODO CHANGE THIS IN ORDER TO USE BLADE IF POSSIBLE
        comments_template(Paths::theme('app/views/parts/comments/list.php'));
    ?>
</article>
