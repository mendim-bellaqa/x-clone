<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black h-screen flex items-center justify-center antialiased">
<div class="relative flex h-full w-full">
    <div class="h-screen w-1/2 bg-black">
        <div class="mx-auto flex h-full w-2/3 flex-col justify-center text-white xl:w-1/2">
        
            <!-- <div class="my-6">
                <button class="flex w-full justify-center rounded-3xl border-none bg-white p-1 text-black hover:bg-gray-200 sm:p-2">
                    <img src="https://freesvg.org/img/1534129544.png" class="mr-2 w-6 object-fill" />
                    Sign up with Google
                </button>
            </div>
            <div>
                <fieldset class="border-t border-solid border-gray-600">
                    <legend class="mx-auto px-2 text-center text-sm">Or create an account with our secure system</legend>
                </fieldset>
            </div> -->
            <div class="mt-10">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <label class="mb-2 block font-extrabold" for="name">Name</label>
                        <input type="text" id="name" class="inline-block w-full rounded-full bg-white p-3 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="mb-2 block font-extrabold" for="email">Email</label>
                        <input  type="email" id="email" placeholder="mail@user.com"  class="inline-block w-full rounded-full bg-white p-3 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="mb-2 block font-extrabold" for="password">Password</label>
                        <input type="password" id="password" class="inline-block w-full rounded-full bg-white p-3 leading-none text-black placeholder-indigo-900 shadow" name="password" required autocomplete="new-password">
                        @error('password')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="mb-2 block font-extrabold" for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" class="inline-block w-full rounded-full bg-white p-3 leading-none text-black placeholder-indigo-900 shadow" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="my-10">
                        <button type="submit" class="w-full rounded-full bg-orange-600 p-5 hover:bg-orange-800">
                            Register
                        </button>
                    </div>

                    <div>
                        <fieldset class="border-t border-solid border-gray-600">
                            <a href="/login">
                                <legend class="mx-auto px-2 mt-5 text-center text-sm">I have an account</legend>
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
