<?php

namespace LaravelLiberu\Tutorials\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Tutorials\Forms\Builders\Tutorial;
use LaravelLiberu\Tutorials\Models\Tutorial as Model;

class Edit extends Controller
{
    public function __invoke(Model $tutorial, Tutorial $form)
    {
        return ['form' => $form->edit($tutorial)];
    }
}
