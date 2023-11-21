<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>X. It's what's happening / X</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.10.0/dist/css/lightgallery.min.css">
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.10.0/dist/js/lightgallery.min.js"></script>
        <!-- Add these lines to include lightGallery CSS and JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.10.0/dist/css/lightgallery.min.css">
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.10.0/dist/js/lightgallery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.10.0/dist/js/lg-thumbnail.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.10.0/dist/js/lg-fullscreen.min.js"></script>


        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>


            <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        <!-- component -->
        <div class="p-relative h-screen" style="background-color: #15202b">
            <div class="flex justify-center">
                <header class="text-white h-12 py-4 h-auto">
                    <!-- Navbar (left side) -->
                    <div style="width: 275px;">
                        <div class="overflow-y-auto fixed h-screen pr-3" style="width: 275px;">
                            <!--Logo-->
                            <svg viewBox="0 0 24 24" class="h-8 w-8 text-white ml-3" fill="currentColor">
                                <g>
                                    <path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z">
                                    </path>
                                </g>
                            </svg>
                            <!-- Nav-->
                            <nav class="mt-5 px-2">
                                
                                <a href="/" class="group flex items-center px-2 py-2 text-base leading-6 font-semibold rounded-full bg-gray-800 text-blue-300">
                                    <svg class="mr-4 h-6 w-6 " stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V10M9 21h6"></path>
                                    </svg>
                                    Home
                                </a>
                                <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-semibold rounded-full hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                    </svg>

                                    Explore
                                </a>
                                <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                        </path>
                                    </svg>
                                    Notifications
                                </a>
                                <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    Messages
                                </a>
                                <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                    </svg>
                                    Bookmarks
                                </a>
                                <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                        </path>
                                    </svg>
                                    Lists
                                </a>
                                <a href="#" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    Profile
                                </a>
                                <a href="/tweets/more" class="mt-1 group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-blue-300">
                                    <svg class="mr-4 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    More
                                </a>
                                <a href="/tweets/create">
                                <button class="bg-blue-400 hover:bg-blue-500 w-full mt-5 text-white font-bold py-2 px-4 rounded-full">
                                    Tweet
                                </button>
                                </a>
                            </nav>
                            <div id="app">
                                <my-vue-component></my-vue-component>
                            </div>
                            <!-- User Menu -->
                            <div class="absolute" style="bottom: 2rem;">
                                <div class="flex-shrink-0 flex hover:bg-gray-800 rounded-full px-4 py-3 mt-12 mr-2">
                                    <a href="/" class="flex-shrink-0 group block">
                                        <div class="flex items-center">
                                            <div>
                                                <img class="inline-block h-10 w-10 rounded-full" src="https://img.freepik.com/free-vector/hand-drawn-side-profile-cartoon-illustration_23-2150517168.jpg?w=740&t=st=1698539186~exp=1698539786~hmac=44d4048cc4620bdba36a6ab6ea6c11acc143e039c6b7610b1112c5da0621ef17" alt="">
                                            </div>
                                            <div class="ml-3">
                                            @if (Auth::check()) 
                                                <p class="text-base leading-6 font-medium text-white">
                                                {{ $user->name }}
                                                </p>
                                                <p class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                                {{ $user->email }}
                                                </p>
                                            @else
                                            <a href="/login">Log In</a>
                                            @endif
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </header>

                    <main role="main">

                        <div class="flex" style="width: 990px;">
                            <section class="w-3/5 border border-y-0 border-gray-800" style="max-width:600px;">

                            <!--Content (Center)-->
                                <aside>
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="col-span-2 border-2 border border-y-0 border-b-4 border-blue-800 shadow-md text-white p-4">For you</div>
                                    <div class="border-2 border border-y-0 border-gray-800 text-gray-500 p-4">Following</div>
                                </div>

                            <div class="flex">
                                <div class="flex-1 mx-2">
                                    <h2 class="px-4 py-2 text-xl font-semibold text-white">Home</h2>
                                </div>
                                <div class="flex-1 px-4 py-2 mx-2">
                                    <a href="" class=" text-2xl font-medium rounded-full text-white hover:bg-gray-800 hover:text-blue-300 float-right">
                                        <svg class="m-2 h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                            <g>
                                                <path d="M22.772 10.506l-5.618-2.192-2.16-6.5c-.102-.307-.39-.514-.712-.514s-.61.207-.712.513l-2.16 6.5-5.62 2.192c-.287.112-.477.39-.477.7s.19.585.478.698l5.62 2.192 2.16 6.5c.102.306.39.513.712.513s.61-.207.712-.513l2.16-6.5 5.62-2.192c.287-.112.477-.39.477-.7s-.19-.585-.478-.697zm-6.49 2.32c-.208.08-.37.25-.44.46l-1.56 4.695-1.56-4.693c-.07-.21-.23-.38-.438-.462l-4.155-1.62 4.154-1.622c.208-.08.37-.25.44-.462l1.56-4.693 1.56 4.694c.07.212.23.382.438.463l4.155 1.62-4.155 1.622zM6.663 3.812h-1.88V2.05c0-.414-.337-.75-.75-.75s-.75.336-.75.75v1.762H1.5c-.414 0-.75.336-.75.75s.336.75.75.75h1.782v1.762c0 .414.336.75.75.75s.75-.336.75-.75V5.312h1.88c.415 0 .75-.336.75-.75s-.335-.75-.75-.75zm2.535 15.622h-1.1v-1.016c0-.414-.335-.75-.75-.75s-.75.336-.75.75v1.016H5.57c-.414 0-.75.336-.75.75s.336.75.75.75H6.6v1.016c0 .414.335.75.75.75s.75-.336.75-.75v-1.016h1.098c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z">
                                                </path>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            
                            <form method="POST" action="{{ route('tweets.store') }}" enctype="multipart/form-data" class="shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                @csrf

                                <div class="flex items-center">
                                    <div class="w-10">
                                        <img class="inline-block h-10 w-10 rounded-full" src="https://img.freepik.com/free-vector/hand-drawn-side-profile-cartoon-illustration_23-2150503804.jpg?w=740&t=st=1698539468~exp=1698540068~hmac=873cb648a1b00c010de37602eb590f42d85271360875a64664da317cb75ed665" alt="">
                                    </div>
                                    <div class="flex-1 px-2 pt-2 mt-2">
                                        <input type="text" id="content" name="content" class="bg-transparent text-gray-400 font-medium text-lg w-full focus:outline-none focus:shadow-outline" placeholder="What's happening?" id="tweet_content">
                                    </div>
                                </div>
                                
                                <div class="flex items-center justify-between mb-5">
                                     <div class="flex-1 text-center px-1 py-1 m-2 relative">
                                        <label for="image" class="group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-blue-300 cursor-pointer">
                                            <svg class="h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                            <input type="file" id="image" name="image" class="hidden" accept="image/*">
                                        </label>
                                    </div>
                                    <!-- <div class="flex-1 text-center py-2 m-2">
                                            <a href="#" class="group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover-bg-gray-800 hover-text-blue-300">
                                                <svg class="h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                                    <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="flex-1 text-center py-2 m-2">
                                            <a href="#" class="group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover-bg-gray-800 hover-text-blue-300">
                                                <svg class="h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                            </a>
                                    </div> -->
                                    <div class="w-64 px-4 mb-5">
                                      </div>

                                    <button type="submit" class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-8 rounded-full mt-2">Post</button>
                                </div>

                                <hr class="border-gray-800 border-4">
                            </form>

                            <div id="app">
                                <tweets-component></tweets-component>
                            </div>
                            
                            <main class="flex justify-center">

                            


                                <div class="text-white">
                                    @foreach($tweets as $tweet)
                                    <div class="items-center mt-5 mb-7 tweet-container">
                                        <div>
                                             <div>
                                                <div class="flex col ml-5">
                                                <a href="{{ route('tweets.edit', ['tweet' => $tweet]) }}" class="text-sm font-medium bg-gray-800 py-1 px-2 rounded text-white align-middle">Edit Tweet</a>
                                                <form method="POST" action="{{ route('tweets.destroy', ['tweet' => $tweet]) }}" class="ml-5">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-sm font-medium bg-gray-900 py-1 px-2 rounded text-white align-middle">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        @if (session('success') && session('tweet_id') == $tweet->id)
                                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative ml-10 mb-5 mt-5 success-message" role="alert">
                                                <strong class="font-bold">Success!</strong>
                                                <span class="block sm:inline">{{ session('success') }}</span>
                                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="text-green-400" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M14.293 5.293a1 1 0 00-1.414 0L10 8.586 7.707 6.293a1 1 0 00-1.414 1.414L8.586 10l-2.293 2.293a1 1 0 001.414 1.414L10 11.414l2.293 2.293a1 1 0 001.414-1.414L11.414 10l2.293-2.293a1 1 0 000-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        @endif

                                   
                                    </div>
                                  
                                    @if(auth()->check())
                                    <div class="flex col ml-5">
                                     
                                            <div class=" text-white text-right mt-3 ">{{ $user->name }}</div>
                                         
                                    </div>

                                        <time datetime="{{ $tweet->created_at }}" class=" text-gray-400 ml-5">

                                            {{ $tweet->created_at->format('d F \a\t H:i A') }}
                                        </time>
                                        
                                    <div class=" text-white p-11 text-left ml-5 mb-5 ">{{ $tweet->content }}</div>
                                    
                                     <!-- Image display -->
                                        @if ($tweet->images->count() > 0)
                                            <div class="lg-container">
                                                @foreach($tweet->images as $image)
                                                    <a href="{{ asset('storage/' . $image->url) }}" data-lg-size="1200-800">
                                                        <img src="{{ asset('storage/' . $image->url) }}" alt="Tweet Image" class="tweet-image">
                                                    </a>
                                                @endforeach
                                            </div>
                                        @endif

                                    <div class="h-16 border-b flex items-center justify-between">
                                        
                                    <div class="flex items-center gap-3">
                                        <!-- Like Button -->
                                        <button 
                                            class="flex items-center text-sm text-gray-600 hover:text-red-500 focus:outline-none"
                                            onclick="likeTweet('{{ route('tweets.like', ['tweet' => $tweet]) }}')"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h14"></path>
                                            </svg>
                                            <span id="like-count-{{ $tweet->id }}" class="ml-1">{{ $tweet->likes->count() }}</span>
                                        </button>
                                        </div>

                                        <div id="app">
                                            <tweet-list :tweets="{{ json_encode($tweets) }}"></tweet-list>
                                        </div>

                                        
                                        <div class="flex items-center gap-3">
                                            <svg width="22px" height="22px" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4,0 C6.209139,0 8,1.790861 8,4 C8,4.1291298 7.99388117,4.25683047 7.98191762,4.38282788 L15.371607,7.98470389 C16.0745405,7.37145444 16.9938914,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 C16.9572434,15 16.0076801,14.6009919 15.2956607,13.9473263 L7.98384745,17.6380767 C7.99453877,17.7572882 8,17.8780063 8,18 C8,20.209139 6.209139,22 4,22 C1.790861,22 0,20.209139 0,18 C0,15.790861 1.790861,14 4,14 C5.37147453,14 6.58173814,14.690226 7.30236849,15.7422555 L14.2017356,12.2577203 C14.0708451,11.8622268 14,11.4393868 14,11 C14,10.5276126 14.0818865,10.0743509 14.2322392,9.65363512 L7.29274641,6.27172794 C6.57099412,7.31588608 5.36538874,8 4,8 C1.790861,8 0,6.209139 0,4 C0,1.790861 1.790861,0 4,0 Z M4,16 C2.8954305,16 2,16.8954305 2,18 C2,19.1045695 2.8954305,20 4,20 C5.1045695,20 6,19.1045695 6,18 C6,16.8954305 5.1045695,16 4,16 Z M18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 Z M4,2 C2.8954305,2 2,2.8954305 2,4 C2,5.1045695 2.8954305,6 4,6 C5.1045695,6 6,5.1045695 6,4 C6,2.8954305 5.1045695,2 4,2 Z"
                                                    id="Combined-Shape"></path>
                                            </svg>
                                            <div class="text-sm">Share</div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <svg width="17px" height="22px" viewBox="0 0 17 22" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.85714286,-0.952380952 L12.1428571,-0.952380952 C14.246799,-0.952380952 15.952381,0.753200953 15.952381,2.85714286 L15.952381,18.2119141 C15.952381,19.263885 15.09959,20.116746 14.047619,20.116746 C13.6150601,20.116746 13.1953831,19.9694461 12.8576286,19.6992071 L7.5,15.4125421 L2.14237143,19.6992071 C1.32096217,20.3564207 0.122301512,20.2233138 -0.534912082,19.4019046 C-0.805151112,19.0641501 -0.952380952,18.644473 -0.952380952,18.2119141 L-0.952380952,2.85714286 C-0.952380952,0.753200953 0.753200953,-0.952380952 2.85714286,-0.952380952 Z M2.85714286,0.952380952 C1.80517191,0.952380952 0.952380952,1.80517191 0.952380952,2.85714286 L0.952380952,18.2119141 L6.31000952,13.9252491 C7.00569973,13.3686239 7.99430027,13.3686239 8.68999048,13.9252491 L14.047619,18.2119141 L14.047619,2.85714286 C14.047619,1.80517191 13.1948281,0.952380952 12.1428571,0.952380952 L2.85714286,0.952380952 Z"
                                                    id="Rectangle-92"></path>
                                            </svg>
                                            <div class="text-sm">Saved</div>
                                        </div>
                                        @endif
                                    </div>
                                    
                                    @endforeach
                                </div>
                            </main>
                            <!-- <div class="flex items-center justify-between ml-10 mt-4">
                                <div class="bg-gray-50 h-11 w-11/12 flex items-center rounded-full">
                                    <form method="POST" action="{{ route('comments.store', $tweet->id) }}">
                                        @csrf
                                        <div class="flex items-center space-x-2 text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3-3m0 0l-3 3m3-3h12m5 8v10a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2z"></path>
                                            </svg>
                                        </div>
                                        <input type="text" class="h-11 w-full bg-gray-100 text-gray-700 text-center outline-none rounded-full focus:bg-white"
                                            placeholder="Add a comment..." name="comment">
                                    </form>
                                </div>
                            </div> -->
                    </section>


                <aside class="w-2/5 h-12 position-relative">
                    <!--Aside menu (right side)-->
                            <div style="max-width:350px;">
                        <div class="overflow-y-auto fixed  h-screen">

                                    <div class="relative text-gray-300 w-80 p-5">
                        <button type="submit" class="absolute ml-4 mt-3 mr-4">
                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                            </svg>
                        </button>

                        <input type="search" name="search" placeholder="Search Twitter" class=" bg-dim-700 h-10 px-10 pr-5 w-full rounded-full text-sm focus:outline-none bg-purple-white shadow rounded border-0">
                    </div>




                    <!--trending tweet section-->
                    <!-- <div class="max-w-sm rounded-lg bg-dim-700 overflow-hidden shadow-lg m-4">
                        <div class="flex">
                            <div class="flex-1 m-2">
                                <h2 class="px-4 py-2 text-xl w-48 font-semibold text-white">Germany trends</h2>
                            </div>
                            <div class="flex-1 px-4 py-2 m-2">
                                <a href="" class=" text-2xl rounded-full text-white hover:bg-gray-800 hover:text-blue-300 float-right">
                                    <svg class="m-2 h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                        </path>
                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <hr class="border-gray-800">
                            <div class="flex">
                                <div class="flex-1">
                                    <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">1 . Trending</p>
                                    <h2 class="px-4 ml-2 w-48 font-bold text-white">#Microsoft363</h2>
                                    <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">5,466 Tweets</p>

                                </div>
                                <div class="flex-1 px-4 py-2 m-2">
                                    <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-blue-300 float-right">
                                        <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <hr class="border-gray-800">
                            
                        <div class="flex">
                            <div class="flex-1">
                                <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">2 . Politics . Trending</p>
                                <h2 class="px-4 ml-2 w-48 font-bold text-white">#HI-Fashion</h2>
                                <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">8,464 Tweets</p>

                            </div>
                            <div class="flex-1 px-4 py-2 m-2">
                                <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-blue-300 float-right">
                                    <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <hr class="border-gray-800">
                        <div class="flex">
                            <div class="flex-1">
                                <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">3 . Rock . Trending</p>
                                <h2 class="px-4 ml-2 w-48 font-bold text-white">#Ferrari</h2>
                                <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">5,586 Tweets</p>

                            </div>
                            <div class="flex-1 px-4 py-2 m-2">
                                <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-blue-300 float-right">
                                    <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <hr class="border-gray-800">
                        <div class="flex">
                            <div class="flex-1">
                                <p class="px-4 ml-2 mt-3 w-48 text-xs text-gray-400">4 . Auto Racing . Trending</p>
                                <h2 class="px-4 ml-2 w-48 font-bold text-white">#vettel</h2>
                                <p class="px-4 ml-2 mb-3 w-48 text-xs text-gray-400">9,416 Tweets</p>
                            </div>
                            <div class="flex-1 px-4 py-2 m-2">
                                <a href="" class=" text-2xl rounded-full text-gray-400 hover:bg-gray-800 hover:text-blue-300 float-right">
                                    <svg class="m-2 h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <hr class="border-gray-800">
                        <div class="flex">
                            <div class="flex-1 p-4">
                                <h2 class="px-4 ml-2 w-48 font-bold text-blue-400">Show more</h2>
                            </div>
                        </div>
                    </div> -->



                    <!--people suggetion to follow section-->
                        <div class="max-w-sm rounded-lg  bg-dim-700 overflow-hidden shadow-lg m-4">
                            <div class="flex">
                                <div class="flex-1 m-2">
                                    <h2 class="px-4 py-2 text-xl w-48 font-semibold text-white">Who to follow</h2>
                                </div>
                            </div>


                            <hr class="border-gray-800">
                                <div class="flex flex-shrink-0">
                                    <div class="flex-1 ">
                                        <div class="flex items-center w-48">
                                            <div>
                                                <img class="inline-block h-10 w-auto rounded-full ml-4 mt-2" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="">
                                            </div>
                                            <div class="ml-3 mt-3">
                                                <p class="text-base leading-6 font-medium text-white">
                                                    Sonali Hirave
                                                </p>
                                                <p class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                                    @ShonaDesign
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex-1 px-4 py-2 m-2">
                                        <a href="" class=" float-right">
                                            <button class="bg-transparent hover:bg-gray-800 text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded-full">
                                                Follow
                                            </button>
                                        </a>

                                    </div>
                                </div>
                            <hr class="border-gray-800">
                            
                            <div class="flex flex-shrink-0">
                                <div class="flex-1 ">
                                    <div class="flex items-center w-48">
                                        <div>
                                            <img class="inline-block h-10 w-auto rounded-full ml-4 mt-2" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="">
                                        </div>
                                        <div class="ml-3 mt-3">
                                            <p class="text-base leading-6 font-medium text-white">
                                                Sonali Hirave
                                            </p>
                                            <p class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                                @ShonaDesign
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex-1 px-4 py-2 m-2">
                                    <a href="" class=" float-right">
                                        <button class="bg-transparent hover:bg-gray-800 text-white font-semibold hover:text-white py-2 px-4 border border-white hover:border-transparent rounded-full">
                                            Follow
                                        </button>
                                    </a>

                                </div>
                            </div>
                            <hr class="border-gray-800">
                            <!--show more-->

                            <div class="flex">
                                <div class="flex-1 p-4">
                                    <h2 class="px-4 ml-2 w-48 font-bold text-blue-400">Show more</h2>
                                </div>
                            </div>
                        </div>
                        <div class="flow-root m-6 inline">
                                    <div class="flex-1">
                                        <a href="#">
                                            <p class="text-sm leading-6 font-medium text-gray-500">Terms Privacy Policy Cookies Imprint Ads info
                                            </p>
                                        </a>
                                    </div>
                                    <div class="flex-2">
                                        <p class="text-sm leading-6 font-medium text-gray-600"> © 2020 Twitter, Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </aside>
            </div>
        </main>

        </div>

    </div>

    <style>
        .overflow-y-auto::-webkit-scrollbar, .overflow-y-scroll::-webkit-scrollbar, .overflow-x-auto::-webkit-scrollbar, .overflow-x::-webkit-scrollbar, .overflow-x-scroll::-webkit-scrollbar, .overflow-y::-webkit-scrollbar, body::-webkit-scrollbar {
        display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        .overflow-y-auto, .overflow-y-scroll, .overflow-x-auto, .overflow-x, .overflow-x-scroll, .overflow-y, body {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
        }

        .bg-dim-700 {
        --bg-opacity: 1;
        background-color: #192734;
        }

        html, body {
        margin: 0;
        background-color: #15202b;
        }

        svg.paint-icon {
        fill: currentcolor;
        }
    </style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tweetContainers = document.querySelectorAll('.tweet-container');

        tweetContainers.forEach((container, index) => {
            const lgContainer = container.querySelector('.lg-container');
            const tweetImages = container.querySelectorAll('.tweet-image');

            if (lgContainer) {
                lightGallery(lgContainer, {
                    selector: '.tweet-image',
                    counter: false,
                    download: false,
                    thumbnail: true,
                    plugins: [lgZoom, lgThumbnail, lgFullscreen],
                });

                lgContainer.addEventListener('onAfterSlide.lg', function (event) {
                    const currentIndex = event.detail.index;
                    // Implement logic to navigate to the next or previous tweet based on the currentIndex
                    // For example, you can show/hide tweets based on the index using JavaScript or Laravel routes.
                });

                // Prevent default swipe gestures on the tweet container to avoid conflicts with lightGallery
                let touchStartX = 0;

                container.addEventListener('touchstart', function (e) {
                    touchStartX = e.touches[0].clientX;
                });

                container.addEventListener('touchmove', function (e) {
                    const touchEndX = e.touches[0].clientX;
                    const swipeDistance = touchEndX - touchStartX;

                    if (Math.abs(swipeDistance) > 50) {
                        e.preventDefault();
                    }
                });
            }
        });
    });
</script>

</script>
    <script>
    // Wait for the document to be fully loaded
    document.addEventListener('DOMContentLoaded', function () {
        // Select the success message div
        const successMessage = document.querySelector('.success-message');
        
        // Check if the success message div exists
        if (successMessage) {
            // Delay before showing the message (1 second = 1000 milliseconds)
            setTimeout(function () {
                successMessage.style.display = 'block';
                
                // Delay before hiding the message (3 seconds = 3000 milliseconds)
                setTimeout(function () {
                    successMessage.style.display = 'none';
                }, 3000);
            }, 1000);
        }
    });
    function likeTweet(route) {
        // Make an AJAX request to like the tweet
        axios.post(route)
            .then(response => {
                // Update the like count on the page
                const likeCountElement = document.getElementById('like-count-' + response.data.tweet_id);
                if (likeCountElement) {
                    likeCountElement.innerText = response.data.likesCount;
                }
            })
            .catch(error => {
                console.error('Error liking tweet:', error);
            });
    }
</script>


    </body>
</html>
