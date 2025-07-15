<div>
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="submit" class="p-3">
        <div class="mb-3">
            <input type="text" wire:model="name" class="form-control" placeholder="Your Name">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <input type="email" wire:model="email" class="form-control" placeholder="Your Email">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <textarea wire:model="message" class="form-control" placeholder="Your Message"></textarea>
            @error('message') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
