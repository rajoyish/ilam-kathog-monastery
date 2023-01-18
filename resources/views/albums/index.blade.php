<x-guest-layout>
    <ul role="list" class="m-8 grid grid-cols-1 gap-x-4 gap-y-8 sm:gap-x-6 md:grid-cols-3 xl:gap-x-8">
        @foreach ($albums as $album)
            <a href="{{ route('albums.show', $album) }}">
                <li class="relative">
                    <div
                        class="aspect-w-10 aspect-h-7 group block w-full overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                        <img src="{{ url('storage/' . $album->cover) }}" alt=""
                            class="pointer-events-none object-cover group-hover:opacity-75" />
                    </div>
                    <p class="pointer-events-none mt-2 block truncate font-bold text-gray-900">
                        {{ $album->title }}
                    </p>
                    <p class="pointer-events-none block text-sm font-medium text-gray-500">
                        {{ $album->galleries->count() }} Photos</p>
                </li>
            </a>
        @endforeach
    </ul>
</x-guest-layout>
