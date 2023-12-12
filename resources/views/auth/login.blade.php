<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white antialiased">
    <div class="relative flex h-full w-full">
        <div class="h-screen w-1/2 bg-black">
            <div class="mx-auto flex h-full w-2/3 flex-col justify-center text-white xl:w-1/2">
                <div class="mb-5" >
                    <p class="text-2xl">Login||||||------</p>
                    <p>please login to continue|||||||---</p>
                </div>
                <!-- <div class="my-6">
                    
                    <button class="flex w-full justify-center rounded-3xl border-none bg-white p-1 text-black hover:bg-gray-200 sm:p-2">
                        <img src="https://freesvg.org/img/1534129544.png" class="mr-2 w-6 object-fill" />Sign in with Google
                    </button>
                </div> -->
                <div>
                    <fieldset class="border-t border-solid border-gray-600">
                        <legend class="mx-auto px-2 text-center text-sm">Or login via our secure system</legend>
                    </fieldset>
                </div>
                <div class="mt-10">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email"  class="mb-5 block font-extrabold">Email</label>
                            <input
                                type="email"
                                id="email"
                                class="inline-block w-full rounded-full bg-white p-3 text-center leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                placeholder="mail@user.com"
                            />
                            @error('email')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <label for="password" class="mb-5 block font-extrabold">Password</label>
                            <input
                                type="password"
                                id="password"
                                class="inline-block w-full rounded-full bg-white p-3 text-center leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30"
                                name="password"
                                required
                                autocomplete="current-password"
                            />
                            @error('password')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-4 flex w-full flex-col justify-between sm:flex-row">
                            <!-- Remember me -->
                            <div>
                                <input type="checkbox" id="remember" />
                                <label for="remember" class="mx-2 text-sm">Remember me</label>
                            </div>
                            <!-- Forgot password -->
                            <div>
                                <a href="#" class="text-sm hover:text-gray-200">Forgot password</a>
                            </div>
                        </div>
                        <div class="my-10">
                            <button type="submit" class="w-full rounded-full bg-orange-600 p-5 hover:bg-orange-800">Login</button>
                        </div>
                        <div>
                            <fieldset class="border-t border-solid border-gray-600">
                                <a href="/register">
                                    <legend class="mx-auto px-2 mt-5 text-center text-sm">I don't have an account</legend>
                                </a>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="h-screen w-1/2 bg-black">
            <img src="{{ asset('images/ths.jpg') }}" class="h-full w-full" />
        </div>
    </div>
</body>
</html>
