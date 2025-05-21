<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login - EduLearn</title>
     @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/dark-mode.js'])
     <!-- Make sure you're importing Flowbite JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</head>

<body class="font-sans bg-gray-50 min-h-screen flex flex-col">
     <!-- Header -->
     <header class="bg-white shadow-sm">
          <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8 flex justify-between items-center">
               <div class="flex items-center">
                    <svg class="h-8 w-8 text-primary" viewBox="0 0 24 24" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                         <path d="M12 2L3 7L12 12L21 7L12 2Z" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" />
                         <path d="M3 17L12 22L21 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                         <path d="M3 12L12 17L21 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" />
                    </svg>
                    <span class="ml-2 text-xl font-bold text-gray-900">EduLearn</span>
               </div>
               <a href="#" class="text-sm font-medium text-primary hover:text-primaryDark">Don't have an account?</a>
          </div>
     </header>

     <!-- Main Content -->
     <main class="flex-grow flex items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
          <div class="max-w-md w-full space-y-8">
               <div class="text-center">
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                         Sign in to your account
                    </h2>
                    <p class="mt-2 text-sm text-gray-600">
                         Access your courses, tests, and learning progress
                    </p>
               </div>

               <!-- Login Form -->
               <form class="mt-8 space-y-6" action="{{route('login.submit')}}" method="POST">
                    @csrf
                    <input type="hidden" name="remember" value="true">
                    <div class="rounded-md shadow-sm space-y-4">
                         <div>
                              <label for="nisn" class="sr-only">NISN</label>
                              <input id="nisn" name="nisn" type="text" autocomplete="nisn" required
                                   class="appearance-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-primary focus:border-primary focus:z-10 sm:text-sm"
                                   placeholder="NISN">
                         </div>
                         <div>
                              <label for="password" class="sr-only">Password</label>
                              <input id="password" name="password" type="password" autocomplete="current-password"
                                   required
                                   class="appearance-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-primary focus:border-primary focus:z-10 sm:text-sm"
                                   placeholder="Password">
                         </div>
                    </div>

                    <div class="flex items-center justify-between">

                         <div class="text-sm">
                              <a href="#" class="font-medium text-primary hover:text-primaryDark">
                                   Forgot your password?
                              </a>
                         </div>
                    </div>

                    <div>
                         <button type="submit"
                              class="group relative w-full flex justify-center py-3 px-4 border text-sm font-medium rounded-md text-gray-800 bg-primary hover:bg-primaryDark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-150">
                              Sign in
                         </button>
                    </div>
               </form>
          </div>
     </main>

     <!-- Footer -->
     <footer class="bg-white py-4">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm text-gray-500">
               © {{date('Y')}} PrimaEdu. All rights reserved.
          </div>
     </footer>
</body>

</html>