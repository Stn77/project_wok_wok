<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? config('app.name')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/dark-mode.js'])
    <!-- Make sure you're importing Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
   <!-- Tambahkan ini di dalam <head> -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">{{config('app.name')}}</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="mx-3">
                        <x-subitem.darkmode></x-subitem.darkmode>
                    </div>
                    <div class="flex gap-3 mx-3 font-medium tracking-normal text-lg">
                        <h3 class="
                        @if (auth()->user()->role === 'admin')
                            text-red-500 bg-red-200 dark:text-white dark:bg-red-500
                        @elseif (auth()->user()->role === 'guru')    
                            text-yellow-500 bg-yellow-200 dark:text-white dark:bg-yellow-500
                        @else
                            text-green-500 bg-green-200 dark:text-white dark:bg-green-500
                        @endif
                        px-4 py-1 rounded-md cursor-default
                        ">{{auth()->user()->name}}</h3>
                    </div>
                    <div class="flex items-center ms-3">
                        <div>
                            <!-- Fixed: Changed to button type and added proper data attributes -->
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                @if (auth()->user()->foto_profile)
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" class="w-8 h-8 rounded-full dark:bg-transparent fill-gray-600 dark:fill-gray-100 bg-white"><path d="M226-262q59-39.67 121-60.83Q409-344 480-344t133.33 21.17q62.34 21.16 121.34 60.83 41-49.67 59.83-103.67T813.33-480q0-141-96.16-237.17Q621-813.33 480-813.33t-237.17 96.16Q146.67-621 146.67-480q0 60.33 19.16 114.33Q185-311.67 226-262Zm253.88-184.67q-58.21 0-98.05-39.95Q342-526.58 342-584.79t39.96-98.04q39.95-39.84 98.16-39.84 58.21 0 98.05 39.96Q618-642.75 618-584.54t-39.96 98.04q-39.95 39.83-98.16 39.83ZM479.73-80q-83.1 0-156.18-31.5-73.09-31.5-127.15-85.83-54.07-54.34-85.23-127.23Q80-397.45 80-480.33q0-82.88 31.5-155.78Q143-709 197.33-763q54.34-54 127.23-85.5T480.33-880q82.88 0 155.78 31.5Q709-817 763-763t85.5 127Q880-563 880-480.18q0 82.83-31.5 155.67Q817-251.67 763-197.33 709-143 635.91-111.5 562.83-80 479.73-80Z"/></svg>
                                @endif
                            </button>
                        </div>
                        <!-- Fixed: Changed display class and removed shadow-sm -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    {{auth()->user()->name}}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    {{auth()->user()->email}}
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button type="submit" 
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Sign out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <x-app.navigation-aside href="/dashboard" icon="dashboard" name="dashboard" check="{{request()->routeIs('admin.dashboard')}}"/>
                @if (auth()->user()->role == 'admin')
                <x-app.dropdown-aside title="Users" icon="group" dropdown="users" route="{{Route::is( 'admin.guru', 'admin.siswa', 'admin.kj', 'admin.mapel')}}">
                    <x-app.navigation-aside href="{{route('admin.siswa')}}" check="{{request()->routeIs('admin.siswa')}}" icon="school" name="Siswa"/>
                    <x-app.navigation-aside href="{{route('admin.mapel')}}" check="{{request()->routeIs('admin.mapel')}}" icon="book" name="Mapel"/>
                    <x-app.navigation-aside href="{{route('admin.kj')}}" check="{{request()->routeIs('admin.kj')}}" icon="sports_volleyball" name="Kelas & Jurusan"/>
                    <x-app.navigation-aside href="{{route('admin.guru')}}" check="{{request()->routeIs('admin.guru')}}" icon="co_present" name="Guru"/>
                </x-app.dropdown-aside>
                @endif

                <x-app.dropdown-aside title="Tugas" icon="book" dropdown="tugas" route="">
                    
                </x-app.dropdown-aside>
                
            </ul>
        </div>
    </aside>

    <div class="p-4 my-14 sm:ml-64 dark:bg-gray-700 bg-white">
        {{$slot}}
    </div>

    <script>
        // Make sure the DOM is fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize all dropdowns
            const dropdownButtons = document.querySelectorAll('[data-dropdown-toggle]');
            
            if (dropdownButtons.length > 0) {
                dropdownButtons.forEach(button => {
                    const targetId = button.getAttribute('data-dropdown-toggle');
                    const targetElement = document.getElementById(targetId);
                    
                    if (targetElement) {
                        button.addEventListener('click', function() {
                            targetElement.classList.toggle('hidden');
                        });
                        
                        // Close dropdown when clicking outside
                        document.addEventListener('click', function(event) {
                            if (!button.contains(event.target) && !targetElement.contains(event.target)) {
                                targetElement.classList.add('hidden');
                            }
                        });
                    }
                });
            }
        });
    </script>
</body>

</html>