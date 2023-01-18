<x-guest-layout>
    <section class="px-8 py-20">
        <div class="mx-auto">
            <div class="mb-16 text-center">
                <h2 class="text-5xl font-bold leading-relaxed">
                    {{ $album->title }}
                </h2>
                <p class="leading-relaxed">
                    {{ $album->description }}
                </p>
            </div>
            <div class="md:columns-2 md:gap-8">
                @foreach ($album->galleries as $gallery)
                    <!-- Photo -->
                    <div class="mb-8">
                        <img class="mb-2 aspect-video w-full rounded-lg object-cover object-top"
                            src="{{ url('storage/' . $gallery->photo) }}" />
                    </div>
                    <!-- / Photo -->
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
