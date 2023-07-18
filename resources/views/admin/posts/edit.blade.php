<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Editar Publicacion
        </h2>
    </x-slot>

    <div class="pt-32 pb-12">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <livewire:admin.edit-post :post="$post" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
