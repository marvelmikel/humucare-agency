<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $post = Post::where('slug', $request->post_slug)->where('status', '0')->first();
        if($post)
        {
            Comment::create([
                'post_id' => $post->id,
                'user_id' => $request->user_id,
                'comment_body' => $request->comment_body

            ]);
        }
        else
        {
            redirect()->back()->with('message', 'no such post');
        }

    }
}
