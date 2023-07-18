<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Etiquetas</h1>
        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <a href="{{ route('admin.tags.create') }}" class="block px-3 py-2 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Crear Etiqueta</a>
        </div>
    </div>
    <div class="flow-root mt-8">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                @if ($tags->count())
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">ID</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Nombre</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Slug</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">color</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($tags as $tag)
                                <tr>
                                    <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap sm:pl-0">{{ $tag->id }}</td>
                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $tag->name }}</td>
                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $tag->slug }}</td>
                                    <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $tag->color }}</td>
                                    <td class="flex items-center justify-end py-4 pl-3 pr-4 space-x-4 text-sm font-medium text-right whitespace-nowrap sm:pr-0">
                                        <a href="{{ route('admin.tags.edit', $tag) }}" class="px-3 py-2 text-white bg-blue-500 rounded-lg">Editar</a>
                                        <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="p-2 text-center text-white bg-red-500 rounded-md ">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div>
                        <p>No hay Etiquetas</p>
                    </div>
                @endif
        </div>
    </div>
</div>
