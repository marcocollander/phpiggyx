<?php

declare(strict_types=1);

namespace App\Controllers;

use F


class HomeController
{
    private TemplateEngine $view;

    public function __construct()
    {
        $this->view = new TemplateEngine();
    }


    public function home(): void
    {
        echo 'home page';
    }
}
