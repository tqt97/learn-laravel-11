<?php

namespace App\Http\Controllers\Pipeline;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->with('category', 'user')
            ->filter([
                \App\Filters\Pipelines\Title::class,
                \App\Filters\Pipelines\Author::class,
                \App\Filters\Pipelines\Category::class,
                \App\Filters\Pipelines\Search::class,
                \App\Filters\Pipelines\Sort::class,
            ])
            ->paginate(5);

        return view('pipeline.posts.index', compact('posts'));
    }
}
