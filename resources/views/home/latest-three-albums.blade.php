<section class="min-h-full bg-red-700 p-8">
    <h2 class="text-center text-4xl font-bold leading-normal text-white">Latest Albums</h2>
    <ul role="list" class="m-8 grid grid-cols-1 gap-x-4 gap-y-8 sm:gap-x-6 md:grid-cols-3 xl:gap-x-8">
        @foreach ($albums as $album)
            <a href="{{ route('albums.show', $album) }}">
                <li class="relative">
                    <div
                        class="aspect-w-10 aspect-h-7 group block w-full overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                        <img src="{{ url('storage/' . $album->cover) }}" alt=""
                            class="pointer-events-none object-cover group-hover:opacity-75" />
                    </div>
                    <p class="pointer-events-none mt-2 block truncate font-bold text-white">{{ $album->title }}</p>
                    <p class="pointer-events-none block text-sm font-medium text-amber-500">
                        {{ $album->galleries->count() }} Photos</p>
                </li>
            </a>
        @endforeach
    </ul>
    <div class="flex justify-center">
        <a href="{{ route('albums.index') }}"
            class="inline-flex rounded border border-amber-500 bg-transparent py-2 px-4 font-bold text-amber-500 shadow hover:border-transparent hover:bg-white hover:text-red-700 hover:shadow-lg">
            More Albums
        </a>
    </div>
</section>
