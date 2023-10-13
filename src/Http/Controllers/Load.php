<?php

namespace LaravelLiberu\Tutorials\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Tutorials\Http\Responses\Index;

class Load extends Controller
{
    public function __invoke()
    {
        return new Index();
    }
}
