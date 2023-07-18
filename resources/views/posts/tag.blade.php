<x-user-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold leading-tight text-gray-500 dark:text-gray-200">
            {{ __('Etiquetas') }}
        </h2>
    </x-slot>

    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid w-full grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <x-card-post :post="$post" />
            @endforeach
        </div>
        <div class="my-10">
            {{ $posts->links() }}
        </div>
    </div>
</x-user-layout>
