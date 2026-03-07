<?php

namespace App\Controllers;

use PHPFramework\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        // app()->set('menu', $this->renderMenu());
        if (!$menu = cache()->get('menu')) {
            cache()->set('menu', $this->renderMenu(), 2);
        }
    }

    public function renderMenu(): string
    {
        return view()->renderPartial('incs/menu');
    }
}
