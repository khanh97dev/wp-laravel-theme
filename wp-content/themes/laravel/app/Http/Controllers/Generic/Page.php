<?php

namespace App\Http\Controllers\Generic;

use App\Models\Page as PageModel;
use App\Http\Controllers\Controller;

class Page extends Controller
{
    /**
     * Page constructor.
     */
    public function __construct()
    {
        if (!empty($GLOBALS['post'])) {
            setup_postdata($GLOBALS['post']);
        }
    }

    public function index()
    {
        /** @var \WP_Post $post */
        return view('generic.page', $this->getViewData());
    }

    protected function getViewData(): array
    {
        $page = new PageModel();
        return [
            'page' => $page,
            'post' => $page->wpPost(),
        ];
    }
}
