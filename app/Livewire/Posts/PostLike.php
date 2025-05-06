<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class PostLike extends Component
{
    public Post $post;
    public bool $showLoginWarning = false;

    public function like()
    {
        if (!Auth::check()) {
            $this->showLoginWarning = true;
            return;
        }

        $existingLike = $this->post->likes()
            ->where('user_id', Auth::id())
            ->first();
        if ($existingLike) {
            $existingLike->delete();
            return;
        }

        Like::create([
            'user_id' => Auth::id(),
            'post_id' => $this->post->id
        ]);
    }

    public function dismissWarning()
    {
        $this->showLoginWarning = false;
    }

    public function render()
    {
        $likesCount = $this->post->likes()->count();
        $hasLiked = Auth::check() && $this->post->likes()->where('user_id', Auth::id())->exists();
        return view('livewire.posts.post-like', compact(
            'likesCount', 
            'hasLiked',
        ));
    }
}