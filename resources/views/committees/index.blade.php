<x-guest-layout>
    <div>
        <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
            <div class="space-y-12">
                <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
                    <h2 class="text-center text-3xl font-extrabold tracking-tight sm:text-4xl">
                        Our Committee
                    </h2>
                </div>
                <ul role="list"
                    class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
                    <!-- Member -->
                    @foreach ($committees as $committee)
                        <li>
                            <div class="space-y-4">
                                <div class="aspect-w-3 aspect-h-3">
                                    <img class="rounded-lg object-cover shadow-lg"
                                        src="{{ url('storage/' . $committee->photo) }}" />
                                </div>
                                <div class="space-y-2">
                                    <div class="space-y-1 text-center leading-6">
                                        <h2 class="font-bold text-red-900">{{ $committee->name_roman }}</h2>
                                        <h3 class="font-bold text-lg">{{ $committee->name_devanagari }}</h3>
                                        <p class="text-lg">{{ $committee->designation }}</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    <!-- End of Member -->
                </ul>
            </div>
        </div>
    </div>
</x-guest-layout>
