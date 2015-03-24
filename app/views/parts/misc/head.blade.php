<?php
use \Baobab\Helper\Urls;
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>#{{ wp_title('|', true, 'right') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{{ Urls::assets('images/favicon/favicon.ico') }}}">
    <link rel="alternate" type="application/rss+xml" title="{{{ get_bloginfo('name') }}}" href="{{{ get_feed_link() }}}">
