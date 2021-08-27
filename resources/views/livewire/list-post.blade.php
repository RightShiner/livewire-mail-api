<div>
    @foreach ($posts as $post)
        <div class="p-4 my-4 bg-gray-300 shadow-xl rounded-md">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-grey-600">{{ $post->created_at->diffForHumans() }}</span>
            </div>
            <div>
                @if ($updateId !== $post->id)
                    <span>{{ $post->body }}</span>
                    <div>
                        <button wire:click="showUpdateForm({{ $post->id }})"
                            class="px-4 py-2 text-white bg-yellow-400 hover:bg-yellow-200 rounded-md">
                            Edit</button>
                        <button
                            onclick="return confirm('Apakah Yakin Akan dihapus?')|| event.stopImmediatePropagation()"
                            wire:click="delete({{ $post->id }})"
                            class="px-4 py-2 text-white bg-red-600 hover:bg-red-400 rounded-md">
                            Hapus</button>
                    </div>
                @else
                    <textarea wire:model="body"
                        class="shadow appearence-none border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline"
                        rows="4"></textarea>
                    <button wire:click="update({{ $post->id }})"
                        class="px-4 py-2 bg-blue-600 text- hover:bg-blue-400 rounded-md">
                        Save</button>
                @endif
            </div>
        </div>
    @endforeach
</div>
