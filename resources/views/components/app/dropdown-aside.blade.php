@props([
    'title',
    'active' => false,
    'icon',
    'dropdown',
    'route'
])

<li class="{{$route ? 'bg-gray-200 dark:bg-gradient-to-r dark:from-gray-700 dark:to-gray-600' : ''}} rounded-lg transition-all duration-100">
    <button type="button" 
        class="{{$route ? 'bg-gray-300 dark:bg-gray-700' : ''}}  flex items-center w-full p-2 text-base text-gray-900 transition duration-100 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
        aria-controls="{{$dropdown}}" data-collapse-toggle="{{$dropdown}}">
        <span class="material-icons">{{$icon}}</span>
        <span class="flex-1 ms-3 whitespace-nowrap text-left">{{$title}}</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
        </svg>
    </button>
    <ul id="{{$dropdown}}" class="{{$route ? 'show' : 'hidden'}} py-2 space-y-2 transition duration-100 ml-2 pr-2">
        {{$slot}}
    </ul>
</li>