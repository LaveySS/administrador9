@props(['post'])

<article>
    <div class="w-full overflow-hidden rounded-lg shadow-xl lg:max-w-md">
        <img class="w-full h-60" src="{{asset('storage/posts') . '/' . $post->image}}" alt="Sunset in the mountains">
        <div class="px-6 py-4 h-52">
            <a href="{{ route('posts.show', $post) }}" class="h-12 text-2xl font-bold leading-8 text-gray-700">{{ $post->name }}</a>
            <p class="mt-3 text-base text-gray-700 line-clamp-4">
                {{ $post->extract }}
            </p>
        </div>
        <div class="px-6 py-6">
            @foreach ($post->tags as $tag)
                <a class="h-6 px-3 py-1 text-white bg-{{ $tag->color }}-500 rounded" href="#">{{ $tag->name }}</a>
            @endforeach
        </div>
    </div>
</article>
