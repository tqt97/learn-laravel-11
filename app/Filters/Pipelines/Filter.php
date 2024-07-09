<?php

namespace App\Filters\Pipelines;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

abstract class Filter
{

    /**
     * Handle the request and apply the filter if it exists.
     *
     * @param mixed $request The incoming request
     * @param Closure $next The next middleware in the pipeline
     * @return mixed The result of applying the filter
     */
    public function handle($request, Closure $next)
    {
        if (!request()->has($this->filterName())) {
            return $next($request);
        }

        return $this->applyFilter($next($request));
    }

    /**
     * Returns the snake case version of the class name of the current object.
     *
     * @return string The snake case version of the class name.
     */
    protected function filterName()
    {
        return Str::snake(class_basename($this));
    }

    /**
     * Applies the filter.
     *
     * @param Builder $builder
     * @return Builder
     */
    abstract protected function applyFilter(Builder $builder): Builder;
}
