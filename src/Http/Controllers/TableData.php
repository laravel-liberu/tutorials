<?php

namespace LaravelLiberu\Tutorials\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Tables\Traits\Data;
use LaravelLiberu\Tutorials\Tables\Builders\Tutorial;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = Tutorial::class;
}
