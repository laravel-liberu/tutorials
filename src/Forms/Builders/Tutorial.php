<?php

namespace LaravelLiberu\Tutorials\Forms\Builders;

use LaravelLiberu\Forms\Services\Form;
use LaravelLiberu\Tutorials\Models\Tutorial as Model;

class Tutorial
{
    private const TemplatePath = __DIR__.'/../Templates/tutorial.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = (new Form($this->templatePath()));
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Model $tutorial)
    {
        return $this->form->edit($tutorial);
    }

    protected function templatePath(): string
    {
        return self::TemplatePath;
    }
}
