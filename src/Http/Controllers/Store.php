<?php

namespace LaravelLiberu\Tutorials\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Tutorials\Http\Requests\ValidateTutorial;
use LaravelLiberu\Tutorials\Models\Tutorial;

class Store extends Controller
{
    public function __invoke(ValidateTutorial $request, Tutorial $tutorial)
    {
        $tutorial->fill($request->validated())->save();

        return [
            'message' => __('The tutorial was created!'),
            'redirect' => 'system.tutorials.edit',
            'param' => ['tutorial' => $tutorial->id],
        ];
    }
}
