<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class PostList extends Component
{
    public $searchTerm = '';
    public $posts = [];

    public function mount()
    {
        $this->filterPosts();
    }

    public function filterPosts()
    {
        $query = Post::whereNotNull('published_at');

        $searchTerm = trim($this->searchTerm);
        if ($searchTerm !== '') {
            $query->where('title', 'like', '%' . $searchTerm . '%');
        }

        $this->posts = $query->orderBy('published_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.posts.post-list');
    }
}