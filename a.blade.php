<div class="hidden md:block">
    <div class="flex items-baseline space-x-4">
    <a href="#" class="px-3 py-2 font-bold text-gray-500 rounded-md dark:text-gray-300 hover:text-blue-600 text-md" aria-current="page">Home</a>
    <div class="flex items-center ml-1 md:ml-3" x-data="{ showDropdown: false }">
        <!-- Profile dropdown -->
        <div class="relative ml-3">
            <button @mouseover="showDropdown = true" @mouseleave="showDropdown = false" @click="showDropdown = !showDropdown" type="button" class="flex items-center max-w-xs p-1 font-bold text-gray-500 dark:text-gray-300 hover:text-blue-600 text-md" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                Categorias
            </button>
            <div x-cloak x-show="showDropdown" @mouseover="showDropdown = true" @mouseleave="showDropdown = false" class="absolute right-0 z-50 flex flex-col p-4 origin-top-right bg-white rounded-md dark:bg-gray-600 drop-shadow-2xl w-52 min-w-max" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                @foreach ($categories as $category)
                    <a href="#" class="py-2 font-bold text-gray-500 dark:text-gray-300 text-md hover:text-indigo-600">{{ $category->name }}</a>
                 @endforeach
            </div>
        </div>
    </div>
    <div class="flex items-center ml-1 md:ml-3" x-data="{ showDropdown: false }">
        <!-- Profile dropdown -->
        <div class="relative ml-3">
            <div>
                <button @mouseover="showDropdown = true" @mouseleave="showDropdown = false" @click="showDropdown = !showDropdown" type="button" class="flex items-center max-w-xs p-1 font-bold text-gray-500 dark:text-gray-300 hover:text-blue-600 text-md" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    Etiquetas
                </button>
            </div>
            <div -cloak x-show="showDropdown" @mouseover="showDropdown = true" @mouseleave="showDropdown = false" class="absolute right-0 z-50 flex flex-col p-4 origin-top-right bg-white rounded-md dark:bg-gray-600 drop-shadow-2xl w-52 min-w-max" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                @foreach ($tags as $tag)
                    <a href="#" class="py-2 font-bold text-gray-500 text-md dark:text-gray-300 hover:text-indigo-600">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
