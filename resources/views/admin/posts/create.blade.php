<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Crear Publicacion
        </h2>
    </x-slot>

    <div class="pt-32 pb-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            @livewire('show-alert')
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <livewire:admin.create-post :post="$post" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
