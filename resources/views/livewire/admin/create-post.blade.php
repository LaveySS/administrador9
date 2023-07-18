<form wire:submit.prevent='createPost' class="space-y-5">
    <div>
        <label for="name" class="font-bold text-gray-600">Titulo</label>
        <input class="w-full border-gray-300 rounded" type="text" id="name" wire:model="name" wire:keyup="generarSlug" :value="old('name')" placeholder="Nombre de la publicacion">
        @error('name')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="slug" class="font-bold text-gray-600">Slug</label>
        <input class="w-full border-gray-300 rounded" id="slug" type="text" wire:model="slug" placeholder="Slug de la publicacion" readonly>
        @error('slug')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="category" class="font-bold text-gray-600">Categoria</label>
        <select class="w-full border-gray-300 rounded" wire:model="category" id="category">
            <option>-- Seleccione --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="tag" class="font-bold text-gray-600">Etiqueta</label>
        <select class="w-full border-gray-300 rounded" wire:model="tag" id="tag">
            <option>-- Seleccione --</option>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
        @error('tag')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="status" class="font-bold text-gray-600">Estado del post</label>
        <select class="w-full border-gray-300 rounded" wire:model="status" id="status">
            <option>-- Seleccione --</option>
            <option value="1">Borrador</option>
            <option value="2">Publicado</option>
        </select>
        @error('status')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="extract" class="font-bold text-gray-600">Estracto</label>
        <textarea class="w-full h-24 border-gray-300 rounded" wire:model="extract" id="extract"></textarea>
        @error('extract')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label for="body" class="font-bold text-gray-600">Publicacion</label>
        <textarea class="w-full h-48 border-gray-300 rounded" wire:model="body" id="body"></textarea>
        @error('body')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Imagen</label>
        <input class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100" wire:model="image" id="image" accept="image/*" type="file">
        <div class="my-5">
            @if ($image)
                <div class="p-4 bg-white border rounded shadow-md w-max">
                    <img class="rounded" src="{{ $image->temporaryUrl() }}">
                </div>
            @endif
        </div>
        @error('image')
            <livewire:input-error :message="$message">
        @enderror
    </div>

    <button type="submit" class="h-8 px-2 font-bold text-white bg-blue-500 rounded">Crear Post</button>

</form>
