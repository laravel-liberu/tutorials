<?php

namespace LaravelLiberu\Tutorials\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Tables\Traits\Init;
use LaravelLiberu\Tutorials\Tables\Builders\Tutorial;

class InitTable extends Controller
{
    use Init;

    protected string $tableClass = Tutorial::class;
}
