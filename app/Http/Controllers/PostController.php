<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    /**
     * 特定IDのpostを表示する
     *
     * @params Object Post // 引数の$postはid=1のPostインスタンス
     * @return Reposnse post view
     */
     public function show(Post $post)
     {
         return view('posts.show')->with(['post' => $post]);
     }
}
?>
