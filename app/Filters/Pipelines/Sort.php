<?php

namespace App\Filters\Pipelines;

use Illuminate\Database\Eloquent\Builder;

class Sort extends Filter
{
    protected function applyFilter(Builder $builder): Builder
    {
        return $builder->orderBy('title', request($this->filterName()));
    }
}
