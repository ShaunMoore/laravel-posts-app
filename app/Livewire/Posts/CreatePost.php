<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;
use App\Http\Requests\CreatePostRequest;
use Mews\Purifier\Facades\Purifier;

class CreatePost extends Component
{
    public $title, $content, $published_at;

    /**
     * Used to create new post
     * @return void
     */
    public function save(): void
    {
        $validated = $this->validate((new CreatePostRequest())->rules());

        Post::create([
            'title' => strip_tags($this->title),
            'slug' => Str::slug(strip_tags($this->title)),
            'content' => Purifier::clean($this->content),
            'published_at' => $this->published_at,
        ]);

        session()->flash('success', 'Post created.');
        $this->reset('title', 'content', 'published_at');
        $this->dispatch('postCreated');
    }

    public function render()
    {
        return view('livewire.posts.create-post');
    }
}