<?php

namespace App\Filters\Pipelines;

use Illuminate\Database\Eloquent\Builder;

class Category extends Filter
{
    protected function applyFilter(Builder $builder): Builder
    {
        // return $builder->where('category', 'like', '%' . $this->filterName() . '%');
        return $builder->whereHas('category', function ($query) {
            $query->where('name', 'like', '%' . request($this->filterName()) . '%');
        });
    }
}
