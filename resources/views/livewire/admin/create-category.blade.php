<form wire:submit.prevent='createCategory' class="space-y-5">
    <div>
        <label for="name" class="font-bold text-gray-600">Nombre</label>
        <input class="w-full border-gray-300 rounded-md" type="text" id="name" wire:model="name" wire:keyup="generarSlug" :value="old('name')" placeholder="Nombre de la categoria">
        @error('name')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="slug" class="font-bold text-gray-600">Slug</label>
        <input class="w-full border-gray-300 rounded-md" id="slug" type="text" wire:model="slug" placeholder="Slug de la categoria" readonly>
        @error('slug')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <button type="submit" class="h-8 px-2 font-bold text-white bg-blue-500 rounded">Crear Categoria</button>
</form>
