<?php

namespace LaravelEnso\Tutorials\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\Contracts\Table;
use LaravelEnso\Tutorials\Models\Tutorial as Model;

class Tutorial implements Table
{
    private const TemplatePath = __DIR__.'/../Templates/tutorials.json';

    public function query(): Builder
    {
        return Model::selectRaw('
            tutorials.id, permissions.name as permission, tutorials.element,
            tutorials.title, tutorials.placement, tutorials.order_index, tutorials.created_at
        ')->join('permissions', 'permissions.id', '=', 'tutorials.permission_id');
    }

    public function templatePath(): string
    {
        return self::TemplatePath;
    }
}
