<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $this->authorize('viewAny', Article::class);
        echo 'Все статьи';
    }

    public function update(Article $article) {
        $this->authorize('update', $article);
        echo 'Обновили статью';
    }
}
