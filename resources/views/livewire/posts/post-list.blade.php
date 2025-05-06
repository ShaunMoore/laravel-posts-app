<div>
    <div class="row">
        <div class="col-sm-6">
            <input type="text"
                class="form-control mb-2"
                wire:model="searchTerm"
                name="searchTerm"
                placeholder="Search posts...">

            <button class="btn btn-primary mb-4"
                wire:click="filterPosts">
                Search
            </button>
        </div>
    </div>

    @forelse ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                @livewire('posts.post-like', ['post' => $post], key($post->id))
            </div>
        </div>
    @empty
        <p>No posts found.</p>
    @endforelse
</div>