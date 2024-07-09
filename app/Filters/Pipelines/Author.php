<?php

namespace App\Filters\Pipelines;

use Illuminate\Database\Eloquent\Builder;

class Author extends Filter
{
    protected function applyFilter(Builder $builder): Builder
    {
        return $builder->whereHas('user', function ($query) {
            $query->where('name', 'like', '%' . request($this->filterName()) . '%');
        });
    }
}
