<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-black text-white antialiased">
    <div class="container mx-auto">
        <div class="flex justify-center items-center h-screen">
            <div class="w-full max-w-md">
                <div class="bg-black rounded-lg shadow p-8">
                    <div class="text-2xl font-semibold text-center mb-4">{{ __('Login') }}</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="block  text-sm font-medium mb-2">
                                {{ __('Email Address') }}
                            </label>
                            <input
                                id="email"
                                type="email"
                                class="form-input block w-full border-2 @error('email') border-red-500 @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                            >
                            @error('email')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block  text-sm font-medium mb-2">
                                {{ __('Password') }}
                            </label>
                            <input
                                id="password"
                                type="password"
                                class="form-input block w-full border-2 @error('password') border-red-500 @enderror"
                                name="password"
                                required
                                autocomplete="current-password"
                            >
                            @error('password')
                                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="bg-blue-500 text-white p-2 rounded w-full hover:bg-blue-700">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
