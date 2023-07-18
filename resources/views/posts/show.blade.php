<x-user-layout>
    <div class="px-2 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <h1 class="my-5 text-4xl font-bold text-left text-gray-500">{{ $post->name }}</h1>

        <div class="flex justify-center gap-6">
            <div class="flex flex-col w-9/12">
                <div class="mb-2 text-lg text-gray-500">
                    {{ $post->extract }}
                </div>
                <figure>
                    <img class="object-cover object-center w-full rounded-lg h-96" src="{{asset('storage/posts') . '/' . $post->image}}" alt="">
                </figure>
                <div class="mt-4 text-base text-gray-500">
                    {{ $post->body }}
                </div>
            </div>

            <aside class="flex flex-col w-3/12 ml-6">
                <p class="mb-4 text-2xl font-bold text-gray-600">Mas en {{ $post->category->name }}</p>
                @foreach ($similares as $similar)
                    <div class="mb-4">
                        <a class="flex" href="{{ route('posts.show', $similar) }}">
                            <img class="object-cover object-center h-20 rounded-md w-28" src="{{asset('storage/posts') . '/' . $similar->image}}" alt="">
                            <div class="flex flex-col justify-between ml-2">
                                <span class="font-bold text-gray-500 line-clamp-3">{{ $similar->name }}</span>
                                <p class="text-xs font-bold text-gray-500">{{ $post->created_at->format('d-m-Y') }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </aside>
        </div>
    </div>
</x-user-layout>

