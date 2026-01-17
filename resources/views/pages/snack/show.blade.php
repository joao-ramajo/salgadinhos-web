<x-layouts.main_layout pageTitle="{{ $snack->name }}">

    <div class="max-w-4xl mx-auto space-y-8">
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif
        {{-- Detalhes do snack --}}
        <section class="bg-white shadow rounded p-6 space-y-4">
            <div class="flex gap-6">
                @if ($snack->image)
                    <img src="{{ $snack->image }}" alt="{{ $snack->name }}" class="w-40 h-40 object-cover rounded">
                @else
                    <div class="w-40 h-40 bg-gray-200 flex items-center justify-center rounded text-gray-500">
                        Sem imagem
                    </div>
                @endif

                <div class="flex-1 space-y-2">
                    <h1 class="text-2xl font-bold">
                        {{ $snack->name }}
                    </h1>

                    <p class="text-sm text-gray-600">
                        Marca: <strong>{{ $snack->brand->name }}</strong>
                    </p>

                    <p class="text-sm text-gray-600">
                        Sabor: {{ $snack->flavor }}
                    </p>

                    <p class="text-lg font-semibold">
                        R$ {{ number_format($snack->price / 100, 2, ',', '.') }}
                    </p>
                </div>
            </div>

            @if ($snack->description)
                <p class="text-gray-700">
                    {{ $snack->description }}
                </p>
            @endif
        </section>

        {{-- Comentários --}}
        <section class="bg-white shadow rounded p-6 space-y-6">
            <h2 class="text-xl font-semibold">
                Comentários ({{ $comments->count() }})
            </h2>

            @forelse ($comments as $comment)
                <div class="border-b pb-4 last:border-b-0">
                    <div class="text-sm text-gray-600 mb-1">
                        {{ $comment->user?->name ?? 'Anônimo' }}
                        ·
                        {{ $comment->created_at->diffForHumans() }}
                    </div>

                    <p class="text-gray-800">
                        {{ $comment->content }}
                    </p>
                </div>
            @empty
                <p class="text-gray-500">
                    Ainda não há comentários para este salgadinho.
                </p>
            @endforelse
        </section>

        {{-- Formulário de comentário --}}
        <section class="bg-white shadow rounded p-6 space-y-4">
            <h2 class="text-xl font-semibold">
                Deixe um comentário
            </h2>

            <form method="POST" action="{{ route('snacks.comments.store', $snack) }}" class="space-y-4">
                @csrf

                <textarea name="content" rows="4" required minlength="3" maxlength="500"
                    class="w-full border rounded p-3 focus:outline-none focus:ring" placeholder="Escreva seu comentário...">{{ old('content') }}</textarea>

                @error('content')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror

                <button type="submit" class="px-4 py-2 bg-black text-white rounded hover:opacity-90">
                    Comentar
                </button>
            </form>
        </section>

    </div>

</x-layouts.main_layout>
