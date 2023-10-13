<?php

namespace LaravelLiberu\Tutorials\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Tutorials\Forms\Builders\Tutorial;

class Create extends Controller
{
    public function __invoke(Tutorial $form)
    {
        return ['form' => $form->create()];
    }
}
