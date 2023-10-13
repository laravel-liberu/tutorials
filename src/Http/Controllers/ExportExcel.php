<?php

namespace LaravelLiberu\Tutorials\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Tables\Traits\Excel;
use LaravelLiberu\Tutorials\Tables\Builders\Tutorial;

class ExportExcel extends Controller
{
    use Excel;

    protected $tableClass = Tutorial::class;
}
