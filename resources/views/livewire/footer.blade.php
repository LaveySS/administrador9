<!--Footer container-->
<footer class="text-center text-white bg-gray-800 dark:bg-black">
    <div class="pt-10 mx-auto max-w-7xl">
        <div class="flex justify-center gap-10">
            <div class="flex items-center">
                <p class="text-lg">Categorias:</p>
                @foreach ($categories as $category)
                    <a href="#" class="p-2">{{ $category->name }}</a>
                @endforeach
            </div>
            <div class="flex items-center">
                <p class="text-lg">Etiquetas:</p>
                @foreach ($tags as $tag)
                    <a href="#" class="p-2">{{ $tag->name }}</a>
                @endforeach
            </div>
        </div>

        <div class="pt-9">
            <div class="flex justify-center gap-5 mb-9">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#b1b0b5}</style><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#b1b0b5}</style><path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/></svg>
            </div>
        </div>
        <div class="mb-5">
            <a href="#" class="px-4">Aspectos legales</a>
            <a href="#" class="px-4">Politica de privacidad</a>
            <a href="#" class="px-4">Cookies</a>
            <a href="#" class="px-4">Contacto</a>
            <a href="#" class="px-4">Sobre nosotros</a>
        </div>

        <!--Copyright section-->
        <div
          class="p-4 text-center text-gray-300">
          © 2023 Copyright:
          <a
            class="text-gray-300"
            href="https://tailwind-elements.com/"
            >Administrador6</a
          >
        </div>
    </div>
  </footer>
