<div>
    @if (session()->has('success'))
        <div class="alert alert-success"><i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="save" class="bg-white p-4 rounded shadow-sm">
        <div class="mb-3">
            <label for="title" class="form-label">Post Title</label>
            <input type="text" class="form-control" wire:model="title" placeholder="Post title">
            @error('title') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Post Content</label>
            <textarea class="form-control" wire:model="content" placeholder="What’s on your mind?" rows="5"></textarea>
            @error('content') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror
        </div>
        <div class="mb-3">
            <label for="published_at" class="form-label">Publish Date</label>
            <input type="datetime-local" class="form-control" wire:model="published_at">
            @error('published_at') 
                <div class="text-danger">{{ $message }}</div> 
            @enderror
        </div>
        <button class="btn btn-primary">
            <i class="bi bi-upload me-1"></i> Publish
        </button>
    </form>
</div>