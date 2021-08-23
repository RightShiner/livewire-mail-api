<div>
    @foreach ($posts as $post)
        <div class="p-4 my-4 bg-white shadow-xl rounded-md">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-grey-600">{{ $post->created_at->diffForHumans() }}</span>
                <button wire:click="showUpdateForm({{ $post->id }})"
                    class=" px-4 py-2 bg-yellow text-black hover:bg-blue-400 rounded-md">
                    Edit</button>
                <button onclick="return confirm('Apakah Yakin Akan dihapus?')|| event.stopImmediatePropagation()"
                    wire:click="delete({{ $post->id }})"
                    class=" px-4 py-2 bg-red text-red hover:bg-blue-400 rounded-md">
                    Hapus</button>
            </div>
            <div>

                @if ($updateId !== $post->id)
                    <span>{{ $post->body }}</span>
                @else
                    <textarea wire:model="body"
                        class="shadow appearence-none border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline"
                        rows="4"></textarea>
                    <button wire:click="update({{ $post->id }})"
                        class="px-4 py-2 bg-yellow text-black hover:bg-blue-400 rounded-md">
                        Save</button>
                @endif
            </div>
        </div>
    @endforeach
</div>
