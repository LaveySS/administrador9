<div class="px-2 mx-auto mb-10 max-w-7xl sm:px-6 lg:px-8">
    <div class="items-center hidden gap-2 px-4 py-3 mb-10 bg-blue-100 rounded md:flex dark:bg-gray-500">
        <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
        <p class="text-gray-500 dark:text-white">El secreto del éxito verdadero es el conocimiento unido a la accion.</p>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-2 mb-6 lg:grid-cols-2">
        <article>
            @foreach ($firstPosts as $post)
                <article class="relative w-full overflow-hidden transition-all duration-300 ease-in-out cursor-pointer rounded-xl lg:h-128 group">
                    <div class="absolute z-10 flex flex-col justify-end w-full h-full p-5 space-y-5 transition-all duration-300 ease-in-out group">
                        <div class="flex gap-5 mb-2">
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag', $tag) }}" class="h-7 px-3 rounded text-xl font-bold text-white bg-{{$tag->color}}-500">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <a href="{{ route('posts.show', $post) }}" class="text-3xl font-bold leading-8 text-white sm:text-4xl">
                            <span class="bg-left-bottom bg-gradient-to-r from-white to-white bg-[length:0%_3px] bg-no-repeat group-hover:bg-[length:100%_3px] transition-all duration-500 ease-out">
                                {{ $post->name }}
                            </span>
                        </a>
                        <p class="hidden text-xl font-bold leading-8 text-white md:block">{{ $post->extract }}</p>
                        <div class="flex items-center gap-4 mt-5">
                            <p class="text-sm font-bold text-white">by Lavey.SS</p>
                            <p class="text-white">-</p>
                            <p class="text-xs font-bold text-white">{{ $post->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                    <a href="{{ route('posts.show', $post) }}">
                        <img src="{{asset('storage/posts') . '/' . $post->image}}" alt="" class="object-cover object-center w-full h-full transition-all duration-500 ease-out brightness-75 group-hover:scale-110">
                    </a>
                </article>
            @endforeach
        </article>
        <article class="flex flex-col gap-6 lg:h-128">
            @foreach ($secondPosts as $post)
                <article class="relative w-full h-full overflow-hidden cursor-pointer rounded-xl group">
                    <div class="absolute z-10 flex flex-col justify-end w-full h-full p-5 space-y-5 transition-all duration-300 ease-in-out group">
                        <div class="flex gap-5 mb-2">
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag', $tag) }}" class="h-7 px-3 rounded text-xl font-bold text-white bg-{{$tag->color}}-500">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <a href="{{ route('posts.show', $post) }}" class="text-3xl font-bold leading-8 text-white">
                            <span class="bg-left-bottom bg-gradient-to-r from-white to-white bg-[length:0%_3px] bg-no-repeat group-hover:bg-[length:100%_3px] transition-all duration-500 ease-out">
                                {{ $post->name }}
                            </span>
                        </a>
                        <div class="flex items-center gap-4 mt-5">
                            <p class="text-sm font-bold text-white">by Lavey.SS</p>
                            <p class="text-white">-</p>
                            <p class="text-xs font-bold text-white">{{ $post->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                    <a href="#" class="">
                        <img src="{{asset('storage/posts') . '/' . $post->image}}" alt="" class="object-cover object-center w-full h-full transition-all duration-500 ease-out brightness-75 group-hover:scale-110">
                    </a>
                </article>
            @endforeach

            <div class="flex flex-col h-full gap-6 sm:flex-row">
                @foreach ($thirdPosts as $post)
                <article class="relative w-full h-full overflow-hidden cursor-pointer rounded-xl group">
                    <div class="absolute z-10 flex flex-col justify-end w-full h-full p-5 space-y-5 transition-all duration-300 ease-in-out group">
                        <div class="flex gap-5 mb-2">
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag', $tag) }}" class="h-6 px-3 rounded text-md font-bold text-white bg-{{$tag->color}}-500">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <a href="{{ route('posts.show', $post) }}" class="text-2xl font-bold leading-8 text-white">
                            <span class="bg-left-bottom bg-gradient-to-r from-white to-white bg-[length:0%_3px] bg-no-repeat group-hover:bg-[length:100%_3px] transition-all duration-500 ease-out">
                                {{ $post->name }}
                            </span>
                        </a>
                        <div class="flex items-center gap-4 mt-5">
                            <p class="text-sm font-bold text-white">by Lavey.SS</p>
                            <p class="text-white">-</p>
                            <p class="text-xs font-bold text-white">{{ $post->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                    <a href="{{ route('posts.show', $post) }}">
                        <img src="{{asset('storage/posts') . '/' . $post->image}}" alt="" class="object-cover object-center w-full h-full transition-all duration-500 ease-out brightness-75 group-hover:scale-110">
                    </a>
                </article>
                @endforeach
            </div>
        </article>
    </div>
    {{-- <div class="flex items-center justify-center w-full mt-10 bg-blue-500 rounded-md h-28">
        <p class="font-bold text-gray-300 text-7xl">Publicidad</p>
    </div> --}}
    <div class="grid gap-6 mb-6 lg:grid-cols-4">
        <div class="grid w-full col-span-3 gap-6 md:grid-cols-2">
            @foreach ($cardPosts as $post)
                <article class="w-full overflow-hidden rounded">
                    <div class="relative">
                        <img src="{{asset('storage/posts') . '/' . $post->image}}" alt="" class="object-cover object-center w-full h-64 rounded-xl sm:h-80">
                        @foreach ($post->tags as $tag)
                            <a href="{{ route('posts.tag', $tag) }}" class="absolute bottom-5 left-5 h-6 px-2 rounded text-md font-bold text-white bg-{{$tag->color}}-500 w-max">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('posts.show', $post) }}" class="text-2xl font-bold leading-8 text-gray-700 transition-all duration-300 ease-in-out dark:text-gray-500 group">
                            <span class="bg-left-bottom bg-gradient-to-r from-blue-400 to-blue-700 bg-[length:0%_3px] bg-no-repeat group-hover:bg-[length:100%_3px] transition-all duration-500 ease-out">
                                {{ $post->name }}
                            </span>
                        </a>
                        <p class="mt-3 overflow-hidden text-gray-500 line-clamp-4 text-md">{{ $post->extract }}</p>
                        <div class="flex items-center gap-6 mt-5">
                            <p class="font-bold text-white dark:text-gray-500">by Lavey.SS</p>
                            <p class="text-white dark:text-gray-500">-</p>
                            <p class="text-sm text-white dark:text-gray-500">{{ $post->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        <aside class="flex flex-col col-span-3 space-y-5 sm:flex-row sm:space-x-5 sm:space-y-0 lg:space-y-5 lg:space-x-0 lg:col-span-1 lg:flex-col">

            <div class="p-5 text-center break-words rounded" style="background-image: url({{asset('img/a.jpg')}})">
                <a href="#" class="text-xl font-bold text-white">Ciencia</a>
            </div>
            <div class="p-5 text-center break-words rounded" style="background-image: url({{asset('img/b.jpg')}})">
                <a href="#" class="text-xl font-bold text-white">Tecnologia</a>
            </div>
            <div class="p-5 text-center break-words bg-center rounded" style="background-image: url({{asset('img/c.jpg')}})">
                <a href="#" class="text-xl font-bold text-white">Historia</a>
            </div>
            <div class="p-5 text-center break-words bg-center rounded" style="background-image: url({{asset('img/d.jpg')}})">
                <a href="#" class="text-xl font-bold text-white">Cultura</a>
            </div>
        </aside>
    </div>
    <div class="mb-5">
        <ul class="grid w-full gap-8 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($scrollPosts as $post)
            <li class="w-full rounded">
                <div class="relative">
                    <img src="{{asset('storage/posts') . '/' . $post->image}}" alt="" class="object-cover object-center w-full h-64 rounded-xl">
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('posts.tag', $tag) }}" class="absolute bottom-5 left-5 h-6 px-2 rounded text-md font-bold text-white bg-{{$tag->color}}-500 w-max">{{ $tag->name }}</a>
                    @endforeach
                </div>
                <div class="mt-5">
                    <a href="{{ route('posts.show', $post) }}" class="text-xl font-bold leading-8 text-gray-700 transition-all duration-300 ease-in-out dark:text-gray-500 group">
                        <span class="bg-left-bottom bg-gradient-to-r from-blue-400 to-blue-700 bg-[length:0%_3px] bg-no-repeat group-hover:bg-[length:100%_3px] transition-all duration-500 ease-out">
                            {{ $post->name }}
                        </span>
                    </a>
                    <div class="flex items-center gap-6 mt-5">
                        <p class="text-sm font-bold text-gray-500 dark:text-white">by Lavey.SS</p>
                        <p class="text-gray-500 dark:text-white">-</p>
                        <p href="#" class="text-xs text-gray-500 dark:text-white">{{ $post->created_at->format('d-m-Y') }}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
