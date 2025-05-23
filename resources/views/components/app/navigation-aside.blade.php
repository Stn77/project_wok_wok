<a {{$attributes}}
    class=" {{$check ? 'bg-gray-100 dark:bg-gray-600' : ''}} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 group">
    <span class="material-icons">
        {{$icon}}
    </span>
    <span class="flex-1 ms-3 whitespace-nowrap">{{$name}}</span>
</a>