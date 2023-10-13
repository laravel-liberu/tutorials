<?php

namespace LaravelLiberu\Tutorials\DynamicRelations;

use Closure;
use LaravelLiberu\DynamicMethods\Contracts\Method;
use LaravelLiberu\Tutorials\Models\Tutorial;

class Tutorials implements Method
{
    public function name(): string
    {
        return 'tutorials';
    }

    public function closure(): Closure
    {
        return fn () => $this->hasMany(Tutorial::class, 'permission_id');
    }
}
