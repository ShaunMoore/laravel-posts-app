<div>
    <button class="btn btn-sm {{ $hasLiked ? 'btn-success' : 'btn-outline-secondary' }}"
        wire:click="like">
        <i class="bi bi-hand-thumbs-up{{ $hasLiked ? '-fill' : '' }}"></i>
        {{ $likesCount }} {{ $hasLiked ? 'Liked' : 'Like' }}
    </button>
    @if ($showLoginWarning)
        <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
            You need to be logged in to like this post.
            <button type="button" class="btn-close" wire:click="dismissWarning" aria-label="Close"></button>
        </div>
    @endif
</div>