<x-layouts.base>
    <div class="flex">

        <div class="flex flex-col">
            <h3 class="text-3xl">Galleries:</h3>
        @forelse($galleries as $gallery)
            <div class="flex p-4">
                {{$gallery->name}}
            </div>
        @empty
            <div class="flex-1 p-4">
                Wow, so empty!
            </div>
        @endforelse
        </div>

    </div>
</x-layouts.base>
