<?php

namespace Balsa\Controllers;

use Baobab\Controller\Controller;
use Baobab\Facade\Baobab;
use Baobab\Helper\Paths;
use Baobab\Helper\Views;
use Illuminate\View\View;

class DefaultController extends Controller
{

    /**
     * Display a generic page
     *
     * @return View The view to be shown to the user
     */
    public function index()
    {
        return Baobab::blade()->view()
            ->make('templates.default');
    }

    /**
     * Display a single post
     *
     * @return View The view to be shown to the user
     */
    public function singlePost()
    {
        $postPartName = Views::pickView(array(
            'parts.single.post-' . get_post_type(),
            'parts.single.default'
        ));

        return Baobab::blade()->view()
            ->make('templates.single')
            ->with(array(
                'postPartName' => $postPartName
            ));
    }

    /**
     * Display a single page
     *
     * @param string $pageTemplate The name of the page template. This can be used to pick a different blade template
     *                             that the default one
     *
     * @return View The view to be shown to the user
     */
    public function singlePage($pageTemplate = '')
    {
        $postPartName = Views::pickView(array(
            'parts.single.page-' . $pageTemplate,
            'parts.single.page',
            'parts.single.default'
        ));

        return Baobab::blade()->view()
            ->make('templates.single')
            ->with(array(
                'postPartName' => $postPartName
            ));
    }

    /**
     * Display the 404 page
     *
     * @return View The view to be shown to the user
     */
    public function error404()
    {
        return Baobab::blade()->view()
            ->make('templates.404');
    }

}