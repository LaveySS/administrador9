<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Categorias</h1>
        </div>
        <div class="flex gap-6 mt-4 sm:ml-16 sm:mt-0">
            <input wire:model="search" class="p-1 border rounded-md w-60 h-9 border-slate-300" placeholder="Ingrese el nombre de un post">
            <a href="{{ route('admin.posts.create') }}" class="block px-3 py-2 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Crear Publicacion</a>
        </div>
    </div>
    <div class="flow-root mt-8">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                @if ($posts->count())
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">ID</th>
                                <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Nombre</th>
                                <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Categoria</th>
                                <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Etiqueta</th>
                                <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">Estado</th>
                                <th class="w-40"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-0">{{ $post->id }}</td>
                                    <td class="max-w-xs px-4 py-4 text-sm text-gray-500 truncate">{{ $post->name }}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500">{{ $post->category->name }}</td>
                                    @foreach ($post->tags as $tag)
                                        <td class="px-4 py-4 text-sm text-gray-500">{{ $tag->name }}</td>
                                    @endforeach
                                    @if ($post->status == 2)
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">Publicado</td>
                                    @else
                                        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">Borrador</td>
                                    @endif
                                    <td class="flex items-center justify-end py-4 pl-3 pr-4 space-x-4 text-sm font-medium text-right whitespace-nowrap sm:pr-0">
                                        <a href="{{ route('admin.posts.edit', $post) }}" class="px-3 py-2 text-white bg-blue-500 rounded-lg">Editar</a>
                                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="p-2 text-center text-white bg-red-500 rounded-md ">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="my-10">
                        {{ $posts->links() }}
                    </div>
                @else
                    <div>
                        <p>No hay categorias</p>
                    </div>
                @endif
        </div>
    </div>
</div>
