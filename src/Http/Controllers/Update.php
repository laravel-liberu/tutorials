<?php

namespace LaravelLiberu\Tutorials\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Tutorials\Http\Requests\ValidateTutorial;
use LaravelLiberu\Tutorials\Models\Tutorial;

class Update extends Controller
{
    public function __invoke(ValidateTutorial $request, Tutorial $tutorial)
    {
        $tutorial->update($request->validated());

        return ['message' => __('The tutorial was successfully updated')];
    }
}
