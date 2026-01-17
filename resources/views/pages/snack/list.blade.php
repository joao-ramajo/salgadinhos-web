<x-layouts.main_layout pageTitle="Salgadinhos">

    <div class="max-w-5xl mx-auto mt-10">

        <!-- GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[120px]">

            @foreach ($snacks as $snack)
                <a href="{{ route('web.snacks.show', ['snack' => $snack->id]) }}">
                    <div class="w-[260px] h-[340px] bg-white rounded-xl shadow border overflow-hidden flex flex-col">

                        <!-- Imagem -->
                        <div class="h-[140px] w-full bg-gray-100">
                            <img src="{{ $snack->image ?? 'https://placehold.co/260x140' }}"
                                class="w-full h-full object-cover" alt="{{ $snack->name }}">
                        </div>

                        <!-- Conteúdo -->
                        <div class="flex-1 p-4 flex flex-col justify-between">

                            <div>
                                <h2 class="text-lg font-semibold leading-tight">{{ $snack->name }}</h2>

                                <p class="text-xs text-gray-600 mt-1">
                                    Marca: <span>{{ $snack->brand_name }}</span>
                                </p>

                                <p class="text-xs text-gray-600">
                                    Sabor: <span>{{ $snack->flavor }}</span>
                                </p>
                            </div>

                            <div class="mt-3">
                                <p class="text-sm font-bold text-gray-900">
                                    R$ <span>{{ $snack->price }}</span>
                                </p>
                            </div>

                        </div>
                    </div>
                </a>
            @endforeach

        </div>

    </div>

</x-layouts.main_layout>
