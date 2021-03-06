<?php

declare(strict_types=1);

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class MainPageController extends Controller
{
    public function __invoke()
    {
        return view('home.main');
    }
}
