<form wire:submit.prevent='editPost' class="space-y-5">
    <div>
        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Titulo</label>
        <div class="mt-2">
            <input class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="text" id="name" wire:model="name" wire:keyup="generarSlug" :value="old('name')" placeholder="Nombre de la publicacion">
        </div>
        @error('name')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">Slug</label>
        <div class="mt-2">
            <input class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" id="slug" type="text" wire:model="slug" placeholder="Slug de la publicacion" readonly>
        </div>
        @error('slug')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="category" class="block text-sm font-medium leading-6 text-gray-900">Categoria</label>
        <div class="mt-2">
            <select class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" wire:model="category" id="category">
                <option>-- Seleccione --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        @error('category')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="tag" class="block text-sm font-medium leading-6 text-gray-900">Etiqueta</label>
        <div class="mt-2">
            <select class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" wire:model="tag" id="tag">
                <option>-- Seleccione --</option>
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
        @error('tag')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Estado del post</label>
        <div class="mt-2">
            <select class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" wire:model="status" id="status">
                <option>-- Seleccione --</option>
                <option value="1">Borrador</option>
                <option value="2">Publicado</option>
            </select>
        </div>
        @error('status')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="extract" class="block text-sm font-medium leading-6 text-gray-900">Estracto</label>
        <div class="mt-2">
            <textarea class="block w-full h-28 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" wire:model="extract" id="extract"></textarea>
        </div>
        @error('extract')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Publicacion</label>
        <div class="mt-2">
            <textarea class="block w-full h-44 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" wire:model="body" id="body"></textarea>
        </div>
        @error('body')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="image_new" class="block text-sm font-medium leading-6 text-gray-900">Imagen nueva</label>
        <div class="mt-2">
            <input class="block rounded-md border-0 py-1.5 text-gray-900 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" type="file" wire:model="image_new" id="image_new" accept="image/*">
        </div>

        <div class="my-5">
            @if ($image_new)
                <img src="{{ $image_new->temporaryUrl() }}" class="h-auto max-w-lg rounded-lg">
            @endif
        </div>

        @error('image_new')
            <livewire:input-error :message="$message">
        @enderror

        <div class="my-5 flex-column d-flex">
            <label>Imagen actual</label>
            <img class="h-auto max-w-lg rounded-lg" src="{{ asset('storage/posts/' . $image) }}" alt="{{ 'Imagen post' . $name }}">
        </div>
    </div>

    <button type="submit" class="h-8 px-2 font-bold text-white bg-blue-500 rounded">Actualizar post</button>

</form>
