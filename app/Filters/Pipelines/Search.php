<?php

namespace App\Filters\Pipelines;

use Illuminate\Database\Eloquent\Builder;

class Search extends Filter
{
    protected function applyFilter(Builder $builder): Builder
    {
        return $builder->where('title', 'like', '%' .  request($this->filterName()) . '%')
            ->orWhere('body', 'like', '%' . request($this->filterName()) . '%');
    }
}
