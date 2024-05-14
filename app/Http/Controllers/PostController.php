<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //lấy bài viết mới nhất (created_at column)
        $postNew = Post::with('user')
            ->latest()->limit(5)->get();

        //lấy 2 category có số BV nhìu nhất
        $categoryPost = CategoryPost::with(['post.user'])
            ->withCount('post')
            ->orderBy('post_count', 'desc')
            ->take(2)->get();

        //lấy tất cả danh mục bài viết
        $categoryAll = CategoryPost::all();

        return view('layouts.post', [
            'categoryPost' => $categoryPost,
            'categoryAll' => $categoryAll,
            'postNew' => $postNew,
        ]);
    }


}
